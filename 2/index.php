<?php
include("index.html");
$my_string=$_REQUEST["input_string"];
$new_string="";


function generate($string){
    $k=0;
    for($i=0; $i<strlen($string);$i++){
        switch($string[$i]){
            case "h":
                $string[$i]="4";
                yield $string[$i];
                $k++;
                break;
            case "l":
                $string[$i]="1";
                yield $string[$i];
                $k++;
                break;
            case "e":
                $string[$i]="3";
                yield $string[$i];
                $k++;
                break;
            case "o":
                $string[$i]="0";
                yield $string[$i];
                $k++;
                break;
            default: yield $string[$i];


        }
    }
    return $k;

}
function replace($s, $new_string) {
    foreach($g=generate($s) as $value) {
        $new_string=$new_string.$value;
    }
   echo $new_string;
}


replace($my_string, $new_string);
?>