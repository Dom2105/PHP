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
    ["Peter","Wild",1],
    #1
    [2,"Hans","Gans"],
    #2
    [3,"Franz","Lustig"]
];


$userDaten[1][] = 2;
echo $userDaten[1][3];
?>



