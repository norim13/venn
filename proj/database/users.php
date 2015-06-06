<?php

function createUser($username, $email, $password, $gender) {
    global $conn;

    if(emailAlreadyTaken($email)) {
        return false;
    }

    $stmt = $conn->prepare("INSERT INTO \"User\" (name, email, password_hash, gender, last_login, signup_date, hashID)
  VALUES (?,?,?,?,?,?,?)");

    $stmt->execute(array(
        $username,
        $email,
        hash('sha256', $password),
        $gender,
        date('Y-m-d H:i:s'),
        date('Y-m-d H:i:s'),
        hash('sha256', $email.$username) ))     ;
}

function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"User\"
      WHERE email = ? AND password_hash = ?");
    $stmt->execute(array($email, hash('sha256', $password)));
    return $stmt->fetch() == true;
}

function getUserFromHash($hashId){
    global $conn;
    $stmt = $conn->prepare("SELECT *
    FROM \"User\"
    WHERE  hashid = ?");
    $stmt->execute(array($hashId));

    return $stmt->fetch();
}

function emailAlreadyTaken($email) {
    global $conn;
    $stmt = $conn->prepare("select 1 from \"User\" where email=? limit 1");
    $stmt->execute(array($email));
    $rows = $stmt->fetch(PDO::FETCH_NUM);
    return $rows >= 1;
}

function getUserFromEmail($email){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"User\" WHERE  email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch();
}

function updateLogin($email) {
    global $conn;
    $stmt = $conn->prepare("UPDATE \"User\"
        SET last_login=CURRENT_DATE
        WHERE email=?");

    $stmt->execute(array($email));
}

function isFriend($myId, $hashId) {
    $otherUser=getUserFromHash($hashId)['id'];
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM \"Friendship\"
                            WHERE ( user1_id = ? AND user2_id = ? )
                            OR ( user2_id = ? AND user1_id = ? )  ");
    $stmt->execute(array($myId,$otherUser,$myId,$otherUser));
    return $stmt->fetch() == true;
}

function getUserFromID($id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"User\" WHERE id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getNameFromID($id){
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM \"User\" WHERE id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getHashID($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT hashid FROM \"User\" WHERE id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
}


function searchUsers($string){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"User\" WHERE name @@ plainto_tsquery(?)");
    $stmt->execute(array($string));
    return $stmt->fetchAll();
}
