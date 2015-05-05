<?php
  function createUser($username, $email, $password, $gender) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO \"User\" (name, email, password_hash, gender, last_login, signup_date) 
  VALUES (?,?,?,?,?,?)");

  $stmt->execute(array(
  $username, 
  $email, 
  hash('sha256', $password),
  $gender, 
  date('Y-m-d H:i:s'),
  date('Y-m-d H:i:s')));
  }

  function isLoginCorrect($email, $password) {
  global $conn;
  $stmt = $conn->prepare("SELECT * 
  FROM \"User\" 
  WHERE email = ? AND password_hash = ?");
  $stmt->execute(array($email, hash('sha256', $password)));
  return $stmt->fetch() == true;
  }
?>
