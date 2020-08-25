<?php
function holeInhalt(){
    require_once './mysql.php';
    $neuesArray = array();
    if ($result = $conn->query("SELECT inhaltFeld FROM inhaltTabelle")) {
        while ($row = mysqli_fetch_row($result)) {
            $neuesArray[] = $row[0];
        }
    }

    return $neuesArray;
}
?>