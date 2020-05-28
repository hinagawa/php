<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}
require_once ("db.php");
if(isset($_POST['title'])&& isset($_POST['text'])){

    $title=$_POST['title'];
    $text=$_POST['text'];
    $author=$_SESSION['user']['login'];
    mysqli_query($mysqli, "INSERT INTO `news` (`title`, `text`, `author`) VALUES ('$title', '$text', '$author')");
    header('Location: news.php');

}