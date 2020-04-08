<?php
header('Content-type: text/html; charset=cp-1251');
if (isset($_GET['input_string'])&& $_GET['input_string']!='') {
    if (isset($_GET["input_string"]) && isset($_GET['ping']) && !isset($_GET['tracert'])) {
        $my_string = $_GET['input_string'];
        $p = $_GET['ping'];
        print "Вы ввели адрес " . $my_string;
        $text = ping($my_string);
        print "<p><b>" . find_ip($text) . "</b></p>";
        print "<p>Успешно " . find_paket($text) . "%</p>";
    } else if (isset($_GET["input_string"]) && isset($_GET['tracert']) && !isset($_GET['ping'])) {
        $my_string = $_GET['input_string'];
        $t = $_GET['tracert'];
        $text = tracert($my_string);
        print "Трассировка через адреса:<br>";
        find_tracert($text);

    } else if (isset($_GET["input_string"]) && isset($_GET['tracert']) && isset($_GET['ping'])) {
        print "Выберите либо ping, либо tracert";
    } else include "index.html";
}
else {
    include "index.html";
    print "Check address!";
}


function ping( $my_text){
    $a=shell_exec("ping ".$my_text);
    return $a;

}
function tracert($my_text){
    $a=shell_exec("tracert ".$my_text);
    return $a;
}

function find_ip($text)
{
    $left = strpos($text, "[");
    $right = strpos($text, "]");
    $new=" ";
    for ($i = $left + 1; $i <= $right - 1; $i++) {
        $new .=$text[$i];
    }
    return $new;

}
function find_paket($text){
    $left=strpos($text, "(");
    $right=strpos($text,"%");
    $new=" ";
    for ($i = $left+1; $i < $right; $i++) {
        $new .=$text[$i];
    }
    return 100-$new;
}
function find_tracert($text){
 preg_match_all("/[0-9]{1,3}[\.][0-9]{1,3}[\.][0-9]{1,3}[\.][0-9]{1,3}/",$text,$new);
foreach ($new as $value){
    foreach ($value as $v){
        echo $v." ";
    }
}


}
?>