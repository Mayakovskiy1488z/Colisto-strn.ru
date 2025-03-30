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




// INSERT
$sql = 'INSERT INTO users(login, password) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);
 
header(header: 'Location: /');
?>

<label>Логин</label>
<input type="text" name="login">
                    </div>

<div class="warn error display-none">
 Такой пользователь уже есть
 </div>
