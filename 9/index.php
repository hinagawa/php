<?php
include_once "ToFile.php";
include_once "ToWeb.php";
if (isset($_POST["text"])) {
    $text = $_POST["text"];
    $toDo = $_POST["toDo"];
    $date = $_POST["date"];
    check($text);
    if ($toDo == "Browser") {
        if ($date == "DandT") {
            $p = "d-m-y\TH:i:s";
        } else
            if ($date == "T") {
                $p = "TH:i:s";
            } else if ($date == "No") {
                $p = "off";
            }
        $toBrowser = new ToWeb();
        $toBrowser->writeText($text);
        $toBrowser->Date($p);
    } else
        if ($toDo == "File") {
            if (isset($_POST["filename"])) {
                $fileName = $_POST["fileName"];
                $fileWriter = new toFile($fileName) . "<br>";
                $fileWriter->writeText($text);
                print "Success";
            }
        }
} else include "index.html";
function check($text)
{
    if (preg_match('/[A-ZÀ-ß]/', $text)) {
        echo "Text  has capital letters ";
    } else echo "Text  has not capital letters ";
}

?>