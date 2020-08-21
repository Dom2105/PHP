<?php
require('./mysql.php');

$vorname = "hallo";

$updatePerson = $conn->query("UPDATE person SET vorname = '$vorname', nachname = 'LALA' WHERE id= 10");
mysqli_close($conn);
?>