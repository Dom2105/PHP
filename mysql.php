<<<<<<< HEAD
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

=======
<?php 
error_reporting(0);
$db = new mysqli('localhost','root','','testdbb');
print_r($db->connect_error);
#print_r("hallo");
if ($db->connect_error) {
    die('DB Error');
}/* else{
    die("DB Connected");
} */
>>>>>>> 6c259daba795b0067068999af45dcd26b9432e58
?>