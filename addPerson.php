<?php
require('./mysql.php');

$name1 = $_GET["name"];
$nachname = $_GET["nachname"];


if($name1 == null || $nachname == null){
    echo "falsche eingabe";
}else{

$addPerson1 = $conn->query("INSERT INTO person (id,vorname,lastname)
                            VALUES (10,'$name1','$nachname')");
$erg = $conn->query("SELECT vorname FROM person")->fetch_assoc();
var_dump($erg);
foreach ($erg as $erg2) {
    echo $erg2;
}
#echo($erg);

}

#$checkName = $conn->query("SELECT vorname FROM person
#                            WHERE vorname = 'Peter'")->fetch_object();
#echo count($checkName);
foreach ($checkName = $conn->query("SELECT vorname FROM person
WHERE vorname = 'Peter'")->fetch_object() as $arrayName) {
    echo $arrayName;
}   


?>