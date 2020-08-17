<?php 
    echo 'ich bin ein Auto';
?><br><hr><br>

<p>Seite aufgerufen am:
<?php 
echo date('d.m.y \u\m H:i:s');
?></p><br><hr><br>

<?php 
#String
$string = 'hallo'; #Zeichenkette 
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
if ($boolean == true) {
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




