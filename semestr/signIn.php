<?php

session_start();
require_once 'db.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `name` = '$login' AND `hash_password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {
   $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['idusers'],
        "email" => $user['email'],
        "login"=>$user['name']
    ];


    header('Location: profile.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: login.php');
}
?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
