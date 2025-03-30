<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($login) < 2) {
    echo "Login error";
    exit;
}

if(strlen($password) < 2) {
     echo "Pass error";
     exit;
 }

  //Password
  $salt = '134ghj41_)(*&^%$#@!DFS';
  $password = md5($salt . $password);

  // DB
require "db.php";

// Auth user
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if($query->rowCount() == 0)
    echo "Такого пользователя нет!";
else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php');
}
 


