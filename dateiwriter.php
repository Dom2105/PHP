<?php

$ausgabe = file_get_contents('test.txt');
$zuSchreibenderText = "Ich bin der Neue Text";
$ausgabe++;
file_put_contents('test.txt',$ausgabe);

echo nl2br($ausgabe);
?>