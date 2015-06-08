<?php

function getPostsFromUser($user) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"Post\"
      WHERE user_id = ?
      ORDER BY post_date DESC");
    $stmt->execute(array($user));
    return $stmt->fetchAll();
}

function getRecentPosts() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"Post\"
      ORDER BY post_date DESC");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getPostFromID($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"Post\"
      WHERE id = ?");
    $stmt->execute(array($post_id));
    return $stmt->fetch();
}

function createPost($user_id,$message,$url,$dateInit,$dateFinal) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Post\" (user_id, message, url, post_date, start_date, expiration_date)
  VALUES (?,?,?,?,?,?) RETURNING id");

    $stmt->execute(array(
        $user_id,
        $message,
        $url,
        date('Y-m-d H:i:s'),
        $dateInit,
        $dateFinal));
    return $stmt->fetch();
}

function deletePost($post_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"Post\" WHERE id=?");
    $stmt->execute(array($post_id));
}

function getTag($name){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Tag\" WHERE name=? ");
    $stmt->execute(array($name));
    return $stmt->fetch();
}

function newTag($name){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Tag\" (name) VALUES (?) RETURNING id");
    $stmt->execute(array($name));
    return $stmt->fetch();
}

function getTagNamesFromPost($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM \"TagPost\", \"Tag\" WHERE \"TagPost\".post_id=? AND
                            \"TagPost\".tag_id=\"Tag\".id");
    $stmt->execute(array($post_id));
    return $stmt->fetchAll();
}

function getTagsFromPost($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"TagPost\", \"Tag\" WHERE \"TagPost\".post_id=? AND
                            \"TagPost\".tag_id=\"Tag\".id");
    $stmt->execute(array($post_id));
    return $stmt->fetchAll();
}

function addTagToPost($post_id,$tag_name){
    global $conn;
    $new_tag=getTag($tag_name);
    if($new_tag==false){
        $new_tag=newTag($tag_name);
    }
    $new_tag_id=$new_tag['id'];

    $stmt = $conn->prepare("INSERT INTO \"TagPost\" (tag_id,post_id)
  VALUES (?,?)");

    $stmt->execute(array($new_tag_id,$post_id ));
}

function getPostsWithTag($tagname){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Post\"
                            WHERE id in (
                            SELECT post_id FROM \"Tag\", \"TagPost\"
                            WHERE \"Tag\".name = ? AND \"Tag\".id = \"TagPost\".tag_id)");
    $stmt->execute(array($tagname));
    return $stmt->fetchAll();
}

function getVote($user_id, $post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Vote\" WHERE user_id = ? AND post_id = ?");
    $stmt->execute(array($user_id, $post_id));
    return $stmt->fetch();
}

function createVote($user_id, $post_id, $positive) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Vote\" (user_id, post_id, positive) VALUES (?,?,?)");
    $stmt->execute(array($user_id, $post_id, $positive));
}

function deleteVote($user_id, $post_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"Vote\" WHERE user_id=? AND post_id=?");
    $stmt->execute(array($user_id, $post_id));
}

function updateVote($user_id, $post_id, $positive) {
    global $conn;
    $stmt = $conn->prepare("UPDATE \"Vote\" SET positive = ? WHERE user_id=? AND post_id=?");
    $stmt->execute(array($positive, $user_id, $post_id));
}

function getVoteCount($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT votedifference FROM \"Post\" WHERE id = ?");
    $stmt->execute(array($post_id));
    return $stmt->fetch();
}

function getCommentsFromPost($post) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"Comment\"
      WHERE post_id = ?");
    $stmt->execute(array($post['id']));
    return $stmt->fetchAll();
}

function getCommentsFromPostID($postid) {
    global $conn;
    $stmt = $conn->prepare("SELECT \"Comment\".id, \"Comment\".message, \"Comment\".date, \"User\".name, \"User\".hashid
      FROM \"Comment\", \"User\"
      WHERE post_id = ? AND \"Comment\".user_id = \"User\".id");
    $stmt->execute(array($postid));
    return $stmt->fetchAll();
}

function createComment($user_id,$post_id,$message) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Comment\" (user_id, post_id, message, date)
  VALUES (?,?,?,?)");

    $stmt->execute(array(
        $user_id,
        $post_id,
        $message,
        date('Y-m-d H:i:s')));
}

function getVotesFromPostID($postid) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Vote\", \"User\" WHERE post_id = ?
                            AND \"Vote\".user_id = \"User\".id");
    $stmt->execute(array($postid));
    return $stmt->fetchAll();
}

function getVotesFromUser($userID) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Vote\" WHERE user_id = ?");
    $stmt->execute(array($userID));
    return $stmt->fetchAll();
}

function searchPosts($string){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Post\" WHERE message @@ plainto_tsquery(?)");
    $stmt->execute(array($string.':*'));
    return $stmt->fetchAll();
}

function isMyPost($post_id,$myID) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Post\" WHERE id = ?
                            AND \"Post\".user_id = ?");
    $stmt->execute(array($post_id,$myID));
    return isset($stmt->fetch()['id']);
}

function isVisibleTo($post_id,$post_owner,$user_id) {
    include_once('../../database/circles.php');

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"PostVisibleTo\" WHERE
                            post_id = ?");
    $stmt->execute(array($post_id));
    $postVisibleTo = $stmt->fetchAll();

    if(!isset($postVisibleTo[0]['post_id'])) {
        return true;
    }
    foreach($postVisibleTo as $circle) {
        $friends = getFriendsFromCircle($circle['circle_id'], $post_owner);

        foreach ($friends as $friend) {
            if ($user_id == $friend['id'])
                return true;
        }
    }
    return false;
}

function createImage($path,$owner_id) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Image\" (path,owner_id)
  VALUES (?,?) RETURNING id");

    $stmt->execute(array(
        $path,
        $owner_id));
    return $stmt->fetch();
}

function createImagePost($path,$owner_id,$post_id) {
    $image=createImage($path,$owner_id);
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"ImagePost\" (image_id,post_id)
                            VALUES (?,?)");

    $stmt->execute(array(
        $image['id'],
        $post_id));
    return $stmt->fetch();
}

function getImagePathFromPost($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT \"Image\".path FROM \"ImagePost\", \"Image\" WHERE \"ImagePost\".post_id=? AND
                            \"ImagePost\".image_id=\"Image\".id" );
    $stmt->execute(array($post_id));
    return $stmt->fetchAll();
}

function createPostVisibleTo($post_id, $circle_id) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"PostVisibleTo\" (post_id,circle_id)
                            VALUES (?,?)");

    $stmt->execute(array($post_id,$circle_id));
    return $stmt->fetch();
}


function getPostsFromUsers($user_ids){
    global $conn;
    $query_string = "SELECT * FROM \"Post\" WHERE ";

    $query_string = "SELECT * FROM \"Post\" WHERE user_id = ANY(ARRAY[" . implode(",", $user_ids) . "]) ORDER BY post_date DESC";

    //WHERE   some_id = ANY(?::INT[])
    //You would need to pass a string representation of the array: {1,2}

    $stmt = $conn->prepare($query_string);
    $stmt->execute();
    return $stmt->fetchAll();
}

function yt($url) {

    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
        $video_id = 'https://www.youtube.com/embed/'.$match[1];

        return '<iframe width="420" height="315" src="'. $video_id.
        '" frameborder="0" allowfullscreen></iframe>';
    }

    return $url;
}