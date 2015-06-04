<?php

function getAllCirclesFromUser($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Circle\" WHERE owner_id = ?");
    $stmt->execute(array($userId));

    return $stmt->fetchAll();
}

function getFriendsFromCircle($circleId,$userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"User\" WHERE id IN
      ((SELECT \"friendship_user2_id\" FROM \"CircleFriendship\" WHERE
      \"friendship_user1_id\" = ? AND \"circle_id\" = ?
        ) UNION
      (SELECT \"friendship_user1_id\" FROM \"CircleFriendship\" WHERE
      \"friendship_user2_id\" = ? AND \"circle_id\" = ?)) ");
    $stmt->execute(array($userId,$circleId,$userId,$circleId));

    return $stmt->fetchAll();
}

function acceptFriendRequest($myId,$newFriendId) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Friendship\" (user1_id, user2_id, date) VALUES (?,?,?)");
    $stmt->execute(array($myId,$newFriendId,date('Y-m-d H:i:s')));
}

function getFriendRequestsOfUser($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM
                            \"FriendRequest\" WHERE
                            \"requestedTo_id\" = ?");
    $stmt->execute(array($userId));

    return $stmt->fetchAll();
}

function getAllFriendsOfUser($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"User\" WHERE id IN
      ((SELECT \"user1_id\" FROM \"Friendship\" WHERE
      \"user2_id\" = ?) UNION
      (SELECT \"user2_id\" FROM \"Friendship\" WHERE
      \"user1_id\" = ?))

       ");
    $stmt->execute(array($userId,$userId));

    return $stmt->fetchAll();
}

function createNewCircle($circle_name,$my_id) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"Circle\" (\"owner_id\", name) VALUES (?,?)");
    $stmt->execute(array($my_id,$circle_name));
}

function renameCircle($circle_new_name,$circle_id,$my_id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE \"Circle\"
        SET name=?
        WHERE owner_id=? AND id=?");

    $stmt->execute(array($circle_new_name,$my_id,$circle_id));
}


function deleteCircle($circle_id,$my_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"Circle\" WHERE id=? AND owner_id=?");
    $stmt->execute(array($circle_id,$my_id));
}

?>
