<?php
require('./mysql.php');
                        #zb. Dominic
    $gesuchterVorname = $_POST["sucheVorname"];

    if ($result = $conn->query("SELECT id,vorname,lastname FROM person WHERE vorname = '$gesuchterVorname'")) {
        
        while ($row = mysqli_fetch_row($result)) {
            printf("id %s Vorname %s Nachname %s".'<br>', $row[0],$row[1],$row[2]);
        }
    }

    mysqli_close($conn);
?>