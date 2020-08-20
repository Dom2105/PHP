<?php
$textDatei = file_get_contents('test.txt');
echo nl2br($textDatei)."<br>";

$textDateiFile = file("test.txt");

for ($i=0; $i < count($textDateiFile); $i++) { 
        echo $i.": ".$textDateiFile[$i]."<br><br>";
}
?>