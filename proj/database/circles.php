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
    return $stmt->fetch();
}

function createFriendRequest($myId,$newFriendId) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"FriendRequest\" (\"requestedBy_id\", \"requestedTo_id\", date) VALUES (?,?,?)");
    $stmt->execute(array($myId,$newFriendId,date('Y-m-d H:i:s')));
    return $stmt->fetch();
}

function declineFriendRequest($myId,$newFriendId) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"FriendRequest\" WHERE \"requestedBy_id\"=? AND \"requestedTo_id\"=?");
    $stmt->execute(array($newFriendId,$myId));
    return $stmt->fetch();
}

function hasFriendRequest($myId,$userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT count(*) FROM
                            \"FriendRequest\" WHERE
                            \"requestedTo_id\" = ?
                            AND \"requestedBy_id\" = ?");
    $stmt->execute(array($userId, $myId));

    return ($stmt->fetch(PDO::FETCH_NUM)[0] != 0);
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
    $stmt = $conn->prepare("INSERT INTO \"Circle\" (\"owner_id\", name) VALUES (?,?) RETURNING id");
    $stmt->execute(array($my_id,$circle_name));
    return $stmt->fetch();
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

function removeFriendship($myId,$user_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"Friendship\" WHERE
                            (user1_id=? AND user2_id=?)
                            OR (user2_id=? AND user1_id=?)");
    $stmt->execute(array($myId,$user_id,$myId,$user_id));
}

function isMyFriend($myId, $userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM \"Friendship\"
                            WHERE ( user1_id = ? AND user2_id = ? )
                            OR ( user2_id = ? AND user1_id = ? )  ");
    $stmt->execute(array($myId,$userId,$myId,$userId));
    return $stmt->fetch() == true;
}

function getFriendship($myId, $userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM \"Friendship\"
                            WHERE ( user1_id = ? AND user2_id = ? )
                            OR ( user2_id = ? AND user1_id = ? )  ");
    $stmt->execute(array($myId,$userId,$myId,$userId));
    return $stmt->fetch();
}


function addFriendToCircle($circle_id,$myId,$friend) {
    $friendship = getFriendship($myId,$friend);
    if($friendship != null) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO \"CircleFriendship\" (circle_id, friendship_user1_id,
                            friendship_user2_id) VALUES (?,?,?)");
        $stmt->execute(array($circle_id, $friendship['user1_id'], $friendship['user2_id']));

    }
}

function isInCircle($my_id, $user_id, $circle_id){
    $friendship = getFriendship($my_id,$user_id);
    if($friendship != null) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM \"CircleFriendship\" WHERE circle_id = ? AND
                    friendship_user1_id = ? AND friendship_user2_id = ?");
        $stmt->execute(array($circle_id, $friendship['user1_id'], $friendship['user2_id']));
        return $stmt->fetch() == true;
    }
    return false;
}

function updateCircleImage($circle_id,$image_id){
    global $conn;
    $stmt = $conn->prepare("UPDATE \"Circle\"
        SET img_id=? WHERE
        id=?");

    $stmt->execute(array($image_id,$circle_id));

    return $stmt->fetch();
}