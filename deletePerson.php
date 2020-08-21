<?php 
require('./mysql.php');
$deletePerson = $_POST['deleteID'];

$deletePerson = $conn->query("DELETE FROM person WHERE id=$deletePerson OR vorname='123'");

echo "Der Nutzer mit der id $deletePerson wurde erfolgreich gelöscht";
mysqli_close($conn);
?>