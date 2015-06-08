<?php

function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT \"User\".id, \"User\".name, \"User\".email, \"User\".last_login, \"User\".signup_date, \"User\".gender, number_of_post
                            FROM \"User\" RIGHT JOIN ( \"Post\"
                            LEFT JOIN (SELECT user_id AS id_count, COUNT(*) AS number_of_post
                            FROM \"Post\"
                            GROUP BY \"Post\".user_id) as Contas
                            ON \"Post\".user_id = id_count)
                            ON \"User\".id = id_count
                            WHERE \"User\".id = \"Post\".user_id
                            GROUP BY \"User\".id, number_of_post");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllPosts() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM \"User\", \"Post\"
                            LEFT JOIN (SELECT post_id AS id_count, COUNT(*) AS number_of_comments
                            FROM \"Comment\"
                            GROUP BY post_id) as Contas
                            ON \"Post\".id = id_count
                            WHERE \"User\".id = \"Post\".user_id");
    $stmt->execute();
    return $stmt->fetchAll();
}

function deletePost($post_id){
    global $conn;
    $stmt = $conn->prepare("DELETE
                            FROM \"Post\" WHERE id=?");
    $stmt->execute(array($post_id));
}

function deleteUser($user_id){
    global $conn;
    $stmt = $conn->prepare("DELETE
                            FROM \"User\" WHERE id=?");
    $stmt->execute(array($user_id));
}

function createReport($postID, $userID, $msg) {
    global $conn;
    $stmt = $conn->prepare("INSERT
                            FROM \"User\" WHERE id=?");
    $stmt = $conn->prepare("INSERT INTO \"Report\" (user_id,post_id,message,date,processed) VALUES (?,?,?,?,?)");
    $stmt->execute(array($userID,$postID,$msg,date('Y-m-d H:i:s'),0));
    return $stmt->fetch();
}

function getReports(){
    global $conn;
    $stmt = $conn->prepare("SELECT \"User\".name as username, \"Post\".message as text , \"Post\".url,\"Post\".id as post_id, \"Report\".date, \"Report\".processed, \"Report\".message, \"Report\".id
                            FROM \"User\", \"Post\",  \"Report\"
                            WHERE
                            \"Report\".user_id=\"User\".id AND
                             \"Report\".post_id=\"Post\".id");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getReportState($report_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM \"Report\"
                            WHERE id=?");
    $stmt->execute(array($report_id));
    return $stmt->fetch();
}

function changeReportState($report_id){
    $state=getReportState($report_id)['processed'];
    /*$new_state= !$state;*/
    if($state)
        $new_state=0;
    else
        $new_state=1;
    global $conn;
    $stmt = $conn->prepare("UPDATE \"Report\" SET processed = ? WHERE id=?");
    $stmt->execute(array($new_state,$report_id));
}