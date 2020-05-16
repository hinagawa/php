<?php
header('Content-Type: text/html; charset=windows-1251');
spl_autoload_register(function ($className) {
    include $className . ".php";
});
start();
function start()
{
    echo "��� �� ��� �� ���������" . "<br>" .
        "���� �� ���� ������� ������" . "<br>" .
        "� �� �������� ���� ����" . "<br>" .
        "� � ���� �� ��� ���� ������" . "<br>";
    $index = new FourMethods();
    try {
        $index->one();
    } catch (\exceptions\FirstException $e) {
        echo $e->getMessage() . "<br>";
    } catch (\exceptions\SecondException $e) {
        echo $e->getMessage() . "<br>";
    }

    try {
        $index->two();
    } catch (\exceptions\SecondException $e) {
        echo $e->getMessage() . "<br>";
    } catch (\exceptions\ThirdException $e) {
        echo $e->getMessage() . "<br>";
    }

    try {
        $index->three();
    } catch (\exceptions\ThirdException $e) {
        echo $e->getMessage() . "<br>";
    } catch (\exceptions\FourthException $e) {
        echo $e->getMessage() . "<br>";
    }

    try {
        $index->four();
    } catch (\exceptions\FourthException $e) {
        echo $e->getMessage() . "<br>";
    } catch (\exceptions\FifthException $e) {
        echo $e->getMessage() . "<br>";
    }
    try {
        $index->five();
    } catch (\exceptions\FifthException $e) {
        echo $e->getMessage() . "<br>";
    } catch (\exceptions\FirstException $e) {
        echo $e->getMessage() . "<br>";
    }

}

?>