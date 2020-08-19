<?php 
    echo 'ich bin ein Auto';
?><br><hr><br>

<p>Seite aufgerufen am:
<?php 
echo date('d.m.y \u\m H:i:s');
?></p><br><hr><br>

<?php 
#String
$string = date('d.m.y'); #Zeichenkette 
#Integer
$zahl = 12; #Ganzezahl  -9223372036854775808 bis 9223372036854775807 64bit (-2147483647 bis 2147483647 32bit)
#float
$kommaZahl = 2.1; #Kommazahl
$MWST = 0.19;
#Boolean
$boolean = false;

$zahlString = $zahl.' '.$string.$boolean;

$zahlGesamt = $zahl+$kommaZahl;

echo $zahlGesamt;
?><br><hr><br>
<?php 
if ($zahl <> $zahl) {
    echo "ist wahr";
}else {
    echo "ist falsch";
}
?><br><hr><br>

<?php 
define('MWST', $MWST);
$preis = 20;

$gesamt = $preis + ($preis*MWST);

echo $gesamt;
?><br><hr><br>

<?php 
    $userID = [
        1,
        2,
        3,
        4,
        'Hallo'
    ];

    
    

    var_dump($userID);
?><br><hr><br>

<?php 
echo $userID[2];
?><br><hr><br>

<?php 
echo count($userID);
?><br><hr><br>

<?php
 
for ($i=0; $i <= count($userID); $i++) { 
    echo $userID[$i].'<br>';
}
$userID[] = "Franz";
?><br><hr><br>

<?php 
foreach ($userID as $user) {
    echo $user.'<br>';
}
?><br><hr><br>

<?php
$userDaten = [
    #0
    [1,"Peter","Wild",5,"w"],
    #1
    [2,"Hans","12",5,"w"],
    #2
    [3,"Franz","Lustig",5,"w"],
    [2,2]
];


#$userDaten[1][] = $string;
echo $userDaten[1][3].'<br>';

for ($i=0; $i < count($userDaten); $i++) { 
    echo '<br>';
    for ($j=0; $j < count(end($userDaten)) ; $j++) { 
        echo $userDaten[$i][$j].' ';
    }
}

/* foreach ($userDaten as $key => $value) {
    echo $key.' '.$value;
} */

?><br><hr><br>

<?php
$zahl2 = 5;

$türeAufZu = true;

switch (!$zahl) {
    case 11:
        echo "Zahl ist 11";
        break;
    case 10:
        echo "Zahl ist 10";
        break;
    case 12:
        echo"Zahl ist 11";
    break;
    
    default:
        echo "Die Zahl ist nicht vorhanden!";
        break;
}
echo '<br><hr><br>';

#Logische Operatoren UND = && and ; ODER= || or ;
#Exklusivesoder = xor ; Negierung = ! zb. !$zahl ;
if (($zahl != 5) || ($zahl2 == 5)) {
    echo "bedingung erfüllt";
}else {
    echo "else ist nicht richtig";
}

echo '<br><hr><br>';

if (!$türeAufZu == true) {
    echo "Türe ist auf";
}else{
    echo "Tür ist zu";
}
?>

<?php 
include('./person.php');
?>




