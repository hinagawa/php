<?php


        $host = 'localhost'; // адрес сервера
        $database = 'semestr_php'; // имя базы данных
        $user = 'root'; // имя пользователя
        $password = '1416'; // пароль
        $mysqli = mysqli_connect($host, $user, $password, $database);
        $mysqli->set_charset('utf8');
        return $mysqli;



?>