<?php
require_once ("db.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM news WHERE idnews = '$id'";

    $result = mysqli_query($mysqli, $query);
}
header('Location: news.php');
?>
