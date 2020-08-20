<?php
include('./mysql.php');
#Klassen Kopf / Rumpf
class Person {

    
    public $vorname;
    private $nachname; 
    private $email; 


                #new Person ("hallo","LALA")
    function __construct($UNTEN,$UNTENNACH){
        #Klassenvaribale = Gesetztevariable; 
        $this->vorname = $UNTEN;
        $this->nachname = $UNTENNACH;
    }

    function druckeName(){
        echo "Vorname: ".$this->vorname.'<br>';
        echo "Nachname: ".$this->nachname.'<br>';
        echo "Email: ".$this->email.'<br>';
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }

    function setVornamen($gesetzt){
        $this->vorname = $gesetzt;
    }

    function getVorname(){
        return $this->vorname;
    }
}

/* $getName1 = $db->query("SELECT vorname FROM person WHERE userID = 1");
$name = $getName1;
print_r($getName1); */
#echo $name;
$person1 = new Person("name","LALA");

#$person1->setVornamen($getName1);
#$person1->vorname = "Peter";
#$person1->nachname = 2;
#$person1->setEmail("f@d.com");
#$person1->nachname = "lala";
#echo $person1->getEmail().'<br>';
#$person1->setVornamen("Sara");
#echo $person1->getVorname().'<br>';
$person1->druckeName();

echo '<br>';

$person2 = new Person("Hans","kak");
#$person2->vorname = "Hans";
#$person2->nachname = "2";

$person2->druckeName();

echo '<br>';


?>