<?php
header('Content-Type: text/html; charset=windows-1251');
$output ='';
    $host = 'localhost'; // ����� �������
    $database = 'semestr_4'; // ��� ���� ������
    $user = 'root'; // ��� ������������
    $password = '1416'; // ������
    $mysqli=mysqli_connect($host, $user, $password, $database);
$mysqli->set_charset("utf8");
$mysqli->query("SET NAMES 'utf-8'");

    $name = "'������'";


$sql= "SELECT * FROM country WHERE fromcountry= ".$name;
echo $sql;
$result=mysqli_query($mysqli, $sql);
echo $result;
  ?>
