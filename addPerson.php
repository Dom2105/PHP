<?php
require('./mysql.php');

$name1 = $_GET["name"];
$nachname = $_GET["nachname"];
$id = $_GET["id"];


if($name1 == null || $nachname == null){
    echo "falsche eingabe";
}else{

$addPerson1 = $conn->query("INSERT INTO person (id,vorname,lastname)
                            VALUES ($id,'$name1','$nachname')");
$erg = $conn->query("SELECT vorname FROM person");

#echo($erg);

}
mysqli_close($conn);
?>