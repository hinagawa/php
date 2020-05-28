<?php

session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
require_once 'db.php';
if($_POST['login']!=" " && $_POST['email']!=" ") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['confirm_password'];
    $check_login = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `name` = '$login'");
    if (mysqli_num_rows($check_login) > 0) {
        $_SESSION['message'] = 'Логин существует';
        header('Location: reg.php');
        die();
    }

    if ($password === $password_confirm) {

        $password = md5($password);
        mysqli_query($mysqli, "INSERT INTO `users` (`name`, `email`, `hash_password`) VALUES ('$login', '$email', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: reg.php');
    }
}
else
{
    $_SESSION['message'] = 'Заполните поля!';
    header('Location: reg.php');
}
?>
