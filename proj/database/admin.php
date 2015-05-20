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
GROUP BY \"User\".id, number_of_post
");
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
WHERE \"User\".id = \"Post\".user_id;


                            "

    );

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

?>
