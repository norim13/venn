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

function updateUserName($userID,$newUserName) {
    global $conn;
    $stmt = $conn->prepare("UPDATE \"User\"
        SET name=?
        WHERE id=?");

    $stmt->execute(array($newUserName,$userID));
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


function updateProfilePic($userID,$imageID){
    global $conn;
    $stmt = $conn->prepare("UPDATE \"User\"
        SET profilepic_id=?
        WHERE \"User\".id=? RETURNING (
          SELECT \"User\".profilepic_id FROM \"User\" WHERE \"User\".id = ?
        ) as profilepic");

    $stmt->execute(array($imageID,$userID, $userID));

    return $stmt->fetch();
}

function getPathImageFromID($imageID){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM \"Image\" WHERE id=?");
    $stmt->execute(array($imageID));
    return $stmt->fetch();
}

function getProfilePicID($userID){
    global $conn;
    $stmt = $conn->prepare("SELECT profilepic_id FROM \"User\" WHERE id=?");
    $stmt->execute(array($userID));
    return $stmt->fetch();
}

function getProfilePic($userID){
    $profilepic_id=getProfilePicID($userID)['profilepic_id'];
    return getPathImageFromID($profilepic_id)['path'];
}

function deleteImage($imageID) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"Image\" WHERE id = ? RETURNING path");
    $stmt->execute(array($imageID));

    $oldPath = $stmt->fetch()['path'];

    unlink('../../images/users/'.$oldPath);
}

function storeTempCode($userId,$code) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO \"ResetPw\" (id, tempcode) VALUES (?,?)");
    $stmt->execute(array($userId,$code));
}

function setNewPassword($userId,$pw) {
    global $conn;
    $stmt = $conn->prepare("UPDATE \"User\"
        SET password_hash=?
        WHERE \"User\".id=?");
    $stmt->execute(array(hash('sha256', $pw),$userId));
}

function removeTempCode($code) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM \"ResetPw\" WHERE tempcode = ?");
    $stmt->execute(array($code));
}

function codeInReset($code) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
      FROM \"ResetPw\"
      WHERE tempcode = ?");
    $stmt->execute(array($code));
    return $stmt->fetch() == true;

}


