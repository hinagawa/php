<?php

use exceptions\FirstException;

header('Content-Type: text/html; charset=windows-1251');

class FourMethods
{


    function one()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FirstException("������ �������-��� ��");

        else
            throw new  \exceptions\SecondException("������-��� ���� �����");

    }

    function two()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\SecondException("������-��� ���� �����");
        else
            throw  new \exceptions\ThirdException("������-��� ��� ���� �����");

    }

    function three()
    {
        $i = random_int(0, 1);
        if ($i)
            throw  new \exceptions\ThirdException("������-��� ��� ���� �����");
        else
            throw new \exceptions\FourthException("�������� �������- ��� ����");

    }

    function four()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FourthException("�������� �������- ��� ����");
        else
            throw new \exceptions\FifthException("����� �������- ��� ����");

    }

    function five()
    {
        $i = random_int(0, 1);
        if ($i)
            throw new \exceptions\FifthException("����� �������- ��� ����");
        else
            throw  new \exceptions\FirstException("������ �������-��� ��");

    }


}


?>
