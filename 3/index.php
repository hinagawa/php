<?php
if (isset($_REQUEST['input_string'])){
    $my_string = $_REQUEST['input_string'];
    $my_string = explode("\n", $my_string);
    $array_sort = array(0);
    $text_array = array(0);
    $k = 0;
    $i = 0;
    foreach ($my_string as $v) {
        $text_array[$i] = $v;
        $i++;
    }
    foreach ($my_string as $v) {
        $text_array[$i] = explode(" ", $v);
        shuffle($text_array[$i]);
        $text_array[$i] = implode(" ", $text_array[$i]);
        $i++;
    }
    foreach ($text_array as $v) {
        $array_sort[$k] = explode(" ", $v);
        $k++;
    }

    uasort($array_sort, function ($s1, $s2) {
        return strcmp(strtolower($s1[1]), strtolower($s2[1]));
    });

    foreach ($array_sort as $v) {
        print implode(" ", $v) . "<br>";
    }
}
else include "index.html";
?>