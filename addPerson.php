<?php
require('./mysql.php');

$name1 = $_GET["name"];
$nachname = $_GET["nachname"];


if($name1 == null || $nachname == null){
    echo "falsche eingabe";
}else{

$addPerson1 = $conn->query("INSERT INTO person (vorname,lastname)
                            VALUES ('$name1','$nachname')");
$erg = $conn->query("SELECT vorname FROM person");

#echo($erg);

}
$conn->close();
?>