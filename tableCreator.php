<?php
require('./mysql.php');

$person = "person";




#Erstellen einer Tabelle mit SQL und PHP
$createTable1 = $conn->query("CREATE TABLE $person (
            id INT(255) AUTO_INCREMENT NOT NULL,
            vorname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)) ENGINE = INNODB
    ");
#var_dump($conn->query("SELECT $person FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASETABLE' AND TABLE_CATALOG=$dbname"));
mysqli_close($conn);
?>