<?php
if (isset($_REQUEST["input_string"])) {
    $my_string=$_REQUEST["input_string"];
   print pass($my_string);
} else include "index.html";
function pass($string){
    if(strlen($string)<=10){
       return "Пароль должен быть больше 10 символов.";
    }
    else if(!preg_match('/^(.*[a-z].*)++$/',$string)){
        return "В пароле должно быть 2 буквы нижнего регистра.";
    }
    else if(!preg_match('/^(.*[A-Z].*)++$/',$string)){
        return "В пароле должно быть 2 буквы верхнего регистра.";
    }
    else if (!preg_match('/^(.*[0-9].*)++$/', $string)) {
        return "В пароле должно быть 2 цифры";
    }
    else if(!preg_match('/^(.*[%,$,#,_,*].*)++$/',$string)){
        return "В пароле должно быть 2 специальных символа.";
    }
    else if(preg_match('{^(.*[a-z].*){4,}$}', $string)) {
        print('В пароле должно быть меньше 3 букв нижнего регистра.');
    }
    else if(preg_match('{^(.*[A-Z].*){4,}$}', $string)) {
        print('В пароле должно быть меньше 3 букв верхнего регистра.');
    }
    else if(preg_match('{^(.*[0-9].*){4,}$}', $string)) {
        print('В пароле должно быть меньше 3 цифр.');
    }
    else if(preg_match('{^(.*[%,$,#,_,*].*){4,}$}', $string)) {
        print('В пароле должно быть меньше 3 специальных символов.');
    }
    else print "Пароль принят.";


}
?>