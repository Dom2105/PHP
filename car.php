<?php
#Klasse
class car{

    #Eigenschaften

    #Sichtbarkeiten var / public ist von überallsichtbar
    #privat ist nur innerhalb der Klasse sichtbar
    #protected ist nur innerhalb der Klasse und Elternklassen
    private $marke; #String
    private $ps;    #Integer
    private $verbrenner;    #Boolean

    #Set Funktionen sind da, um Privatvariablen von auserhalb 
    #der Klasse Setzen zu können
    function setMarke($irgendwas){
        $this->marke = $irgendwas;
    }
    #Get Funktionen sind da, um Privatvariablen von auserhalb
    #der Klasse auszulesen und sich anzeigen zulassen
    function getMarke(){
        return $this->marke;
    }

    function setPs($ps){
        $this->ps = $ps;
    }

    function getPs(){
        return $this->ps;
    }

    function setVerbrenner($verbrenner){
        $this->verbrenner = $verbrenner;
    }

    function isVerbrenner(){
        return $this->verbrenner;
    }
    
}

$psvar = " PS";
$eingabe = $_GET["auto"];
$eingabePs = $_GET["ps"]; 


if ($eingabe == !null && $eingabePs == !null) {
    $eingabe = $eingabe;
    $eingabePs = $eingabePs;
}elseif ($eingabe == null && $eingabePs == !null) {
    $eingabe = "";
    $eingabePs = $eingabePs;
}elseif ($eingabe == !null && $eingabePs == null) {
    $eingabe = $eingabe;
    $eingabePs = "";
}else {
    $eingabe = "";
    $eingabePs = "";
}


$car1 = new car();

$car1->setMarke($eingabe);
$car1->setPs($eingabePs);
$car1->setVerbrenner(true);

print_r($car1->getMarke().' '.$car1->getPs().$psvar.'<br>');

#   (      true        )
if ($car1->isVerbrenner()== false) {
    echo "Ich bin kein Verbrenner";
}else {
    echo "ich bin ein Verbrenner";
}
?>

<form action="./car.php" method="get">
    <label><input type="Auto" name="auto"></label>
    <label><input type="Ps" name="ps"></label>
    <button>Schreiben</button>
</form>
