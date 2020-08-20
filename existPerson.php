<?php 
require('./mysql.php');

$existVorname = $_POST["existVorname"];
$existNachname = $_POST["existNachname"];
$notExist = true;

if (checkExist($existVorname,$existNachname)== true) {
    echo "Wahr";
}else{
    echo "Falsch";
}
/* if ($notExist == True) {
    $addNonExistPerson = $conn->query("INSERT INTO person (vorname,lastname)
            VALUES ('$existVorname','$existNachname')");
} */

function checkExist($vorname,$nachname){
    require('./mysql.php');
    $notExist = true;

    if ($result = $conn->query("SELECT vorname, lastname FROM person WHERE vorname = '$vorname' AND '$nachname'")) {
    
        while ($row = mysqli_fetch_row($result)) {
           
            if ($row[0]== $vorname && $row[1] == $nachname) {
                
                printf("Sowohl der Vorname %s als auch der Nachname %s sind leider schon vergeben", $row[0],$row[1]);
            }elseif ($row[0] == !$vorname && $row[1] == $nachname) {
                
                printf("Der Nachname %s ist leider schon vergeben", $row[1]);
            }elseif ($row[0] == $vorname && $row[1] == !$nachname) {
                
                printf("Der Vorname %s ist leider schon vergeben", $row[0]);
            }else {
                $notExist = true;
                
            }
            
        }
    }

    return $notExist;
}
?>