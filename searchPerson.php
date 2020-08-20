<?php
require('./mysql.php');

    $gesuchterVorname = $_POST["sucheVorname"];

    if ($result = $conn->query("SELECT vorname, lastname FROM person WHERE vorname = '$gesuchterVorname'")) {
        
        while ($row = mysqli_fetch_row($result)) {
            printf("Vorname %s Nachname %s", $row[0],$row[1]);
        }
    }
?>