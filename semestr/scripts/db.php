<?php


        $host = 'localhost'; // ����� �������
        $database = 'semestr_php'; // ��� ���� ������
        $user = 'root'; // ��� ������������
        $password = '1416'; // ������
        $mysqli = mysqli_connect($host, $user, $password, $database);
        $mysqli->set_charset('utf8');
        return $mysqli;



?>