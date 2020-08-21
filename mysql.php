<?php

#Login Daten für die MYSQLDatenbank
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

#Verbindung herstellen
$conn = new mysqli($servername,$username,$password,$dbname);

#Verbindungprüfen
if ($conn->connect_error) {
    die("Connection faild: ". $conn->connect_error);
}else {
   # echo "Verbindung zur MySQL Datenbank steht";
}

?>