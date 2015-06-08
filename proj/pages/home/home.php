<?php

include_once '../../config/init.php';

/* Copied form http://phpdevblog.niknovo.com/2009/01/using-array-unique-with-multidimensional-arrays.html */
function arrayUnique($array, $preserveKeys = false)
{
    // Unique Array for return
    $arrayRewrite = array();
    // Array with the md5 hashes
    $arrayHashes = array();
    foreach($array as $key => $item) {
        // Serialize the current element and create a md5 hash
        $hash = md5(serialize($item));
        // If the md5 didn't come up yet, add the element to
        // to arrayRewrite, otherwise drop it
        if (!isset($arrayHashes[$hash])) {
            // Save the current element hash
            $arrayHashes[$hash] = $hash;
            // Add element to the unique Array
            if ($preserveKeys) {
                $arrayRewrite[$key] = $item;
            } else {
                $arrayRewrite[] = $item;
            }
        }
    }
    return $arrayRewrite;
}

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    $circles = getAllCirclesFromUser($_SESSION['id']);

    foreach($circles as $circle) {
        $friends = getFriendsFromCircle($circle['id'], $_SESSION['id']);
        foreach($friends as $friend)
            $c[] = $friend;
    }

    if($c) {
        $uniqueC = arrayUnique($c);
        foreach($uniqueC as $circleUser) {
            $circlePosts[] = getPostsFromUser($circleUser['id']);
        }

        usort($circlePosts, function($a, $b) {
            if($a['start_date'] != null)
                $aValue = $a['start_date'];
            else $aValue = $a['post_date'];

            if($b['start_date'] != null)
                $bValue = $a['start_date'];
            else $bValue = $a['post_date'];

            return $aValue - $bValue;
        });

        foreach($circlePosts as $post => $key) {
            if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
                (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
                && $key['user_id'] != $_SESSION['id']) {
                unset($circlePosts[$post]);
            }
        }

        $smarty->assign('circles_posts', $circlePosts);
    }

    $recent_posts = getRecentPosts();

    foreach($recent_posts as $post => $key) {
        if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
            (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
            && $key['user_id'] != $_SESSION['id']) {
            unset($recent_posts[$post]);
        }
    }

    $smarty->assign('recent_posts', $recent_posts);
    $smarty->assign('user_circles', $circles);

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));



    if(isset($_SESSION['double_scroll']) && $_SESSION['double_scroll'] == 'yes'){
        echo '<link href="../../css/feed_double.css" rel="stylesheet">';
    }
    else echo '<link href="../../css/feed.css" rel="stylesheet">';
    $smarty->display('../../templates/posts/feed.tpl');
}
else
    $smarty->display('../../templates/users/home.tpl');