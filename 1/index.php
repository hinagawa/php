<?php
if (isset($_REQUEST["input_string"])) {

 $my_string=$_REQUEST['input_string'];
 $my_value=$_REQUEST['input_value'];
 replace($my_string, $my_value);
} else include "index.html";
function replace($my_string, $my_value)
{


 $a = 0;
 $i = 0;
 $op = 0;
 $cl = 0;
 $my_array = array(0);
 for ($k = 0; $k < strlen($my_string); $k++) {
  switch ($my_string[$k]) {

   case  ">":
    $a++;
    break;
   case "<":
    $a--;
    break;
   case "+":
    $my_array[$a]++;
    break;
   case "-":
    $my_array[$a]--;
    break;
   case ".":
    echo chr($my_array[$a]);
    break;
   case ",":
    $my_array[$a] = ord($my_value[$i]);
    $i++;
    break;
   case "]":
    if ($my_array[$a] != 0) {
     $cl++;
     if ($my_array[$a] != 0) {
      while ($cl != 0) {
       $k--;
       if ($my_string[$k] == "]") {
        $cl++;
       } else if ($my_string[$k] == "[") {
        $cl--;
       }
      }
     }
    }
    break;
   case "[":
    if ($my_array[$a] == 0) {
     $op++;
     while ($op != 0) {
      $i++;
      if ($my_string[$k] == "[") {
       $op++;
      } else if ($my_string[$k] == "]") {
       $op--;
      }
     }
    }
    break;
  }
 }
}
?>
