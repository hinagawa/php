<?php
ini_set('max_execution_time', 900);
include("main.html");
 $my_string=$_REQUEST['input_string'];
 $my_value=$_REQUEST['input_value'];
 $a=0;
 $i=0;
 $my_array=array(0);
for($k=0; $k<strlen($my_string); $k++) {
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
  case "[":
   if ($my_array[$a] == 0) {
    while ($my_string[$k] != "[") {
     $k++;
    }
    $k++;
   }
   break;
  case "]":
   if ($my_array[$a] != 0) {
    while ($my_string[$k] != "[") {
     $k--;
    }
    break;
   }

 }
}
?>
