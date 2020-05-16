<?php

use exceptions\FirstException;

header('Content-Type: text/html; charset=windows-1251');

class FourMethods
{


    function one()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FirstException("Первая причина-это ты");

        else
            throw new  \exceptions\SecondException("Вторая-все твои мечты");

    }

    function two()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\SecondException("Вторая-все твои мечты");
        else
            throw  new \exceptions\ThirdException("Третья-это все твои слова");

    }

    function three()
    {
        $i = random_int(0, 1);
        if ($i)
            throw  new \exceptions\ThirdException("Третья-это все твои слова");
        else
            throw new \exceptions\FourthException("Четвёртая причина- это ложь");

    }

    function four()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FourthException("Четвёртая причина- это ложь");
        else
            throw new \exceptions\FifthException("Пятая причина- это боль");

    }

    function five()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FifthException("Пятая причина- это боль");
        else
            throw  new \exceptions\FirstException("Первая причина-это ты");

    }


}


?>
