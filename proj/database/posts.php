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

function createPost($user_id,$message,$url) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Post\" (user_id, message, url, post_date, start_date, expiration_date)
  VALUES (?,?,?,?,?,?) RETURNING id");

    $stmt->execute(array(
        $user_id,
        $message,
        $url,
        date('Y-m-d H:i:s'),
        date('Y-m-d H:i:s'),
        date('2016-m-d H:i:s')));
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

function getTagsFromPost($post_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM \"TagPost\", \"Tag\" WHERE \"TagPost\".post_id=? AND
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
    echo $new_tag_id;

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