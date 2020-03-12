<?php
if (isset($_REQUEST["input_string"])) {

    $my_string=$_REQUEST["input_string"];
    echo " ".replace($my_string);
} else include "index.html";
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
function replace($s) {
    $new_string="";
    foreach($g=generate($s) as $value) {
        $new_string=$new_string.$value;
    }
    echo "Кол-во замен ".$g->getReturn();
   return $new_string;

}

?>