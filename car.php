<?php
#Klasse
class car{

    #Eigenschaften

    #Sichtbarkeiten var / public ist von überallsichtbar
    #privat ist nur innerhalb der Klasse sichtbar
    #protected ist nur innerhalb der Klasse und Elternklassen
    private $marke; #Default2 #String
    private $ps;    #Default2 #Integer
    private $verbrenner;    #Boolean

    #Konstruktor: Der Konstruktor ist das Grundgerüst für die Instanzierung
    #des Objektes was erzeugt werden soll. Über ihn können wir erzwingen was 
    #benötigt wird, können aber auch Objekt Eigenschaften die nicht im Konstruktor
    #stehen Setzen. 
    function __construct($autoMarke, $autoPs){
        $this->marke = $autoMarke;
        $this->ps = $autoPs;
    }

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
?>
<?php
$psvar = " PS";
$eingabe = $_POST["auto"]; #null
$eingabePs = $_POST["ps"]; #null


    #BEIDES NICHT NULL
/* if ($eingabe == !null && $eingabePs == !null) {
    $eingabe = $eingabe;
    $eingabePs = $eingabePs;
    #$EINGABE NULL ABER $EINGABEPS IST NICHT NULL
}elseif ($eingabe == null && $eingabePs == !null) {
    $eingabe = "Default";
    $eingabePs = $eingabePs;
    #$EINGABE IST NICHT NULL ABER $EINGABEPS IST NULL
}elseif ($eingabe == !null && $eingabePs == null) {
    $eingabe = $eingabe;
    $eingabePs = "Default";
    #BEIDES IST NULL
}else {
    $eingabe = "Default";
    $eingabePs = "Default";
} */

switch ($eingabe) {
    case !null:
        $eingabe = $eingabe;
        break;
    default:
        $eingabe = "default Switch";
        break;
}

switch ($eingabePs) {
    case !null:
        $eingabePs = $eingabePs;
        break;
    
    default:
        $eingabePs = "default ps switch";
        break;
}
#var_dump($eingabe);
#var_dump($eingabePs);

$car1 = new car("Default2","Default2");

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

<!-- <form action="./car.php" method="post">
    <label><input type="Auto" name="auto"></label>
    <label><input type="Ps" name="ps"></label>
    <button>Schreiben</button>
</form> -->
