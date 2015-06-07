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

        $smarty->assign('circles_posts', $circlePosts);
    }

    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->assign('user_circles', $circles);

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));

    $smarty->display('../../templates/posts/feed.tpl');
}
else
    $smarty->display('../../templates/users/home.tpl');