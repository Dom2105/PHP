<?php
#Wiederholung PHP mit MySQL 27.08.2020

#Variablen

$vornamenNachnamen = 9;

$vornamenNachnamen = "21";



#Datentypen
$string = "HALO ich bin ein String";
$integer = 12;
$float = 12.334;
$boolean = true;


#IF ELSE und SWITCH CASE

if (10 <= 21) {
    
    
}elseif ($vornamenNachnamen == "21") {
    # code...
}else{
    echo "ist falsch";
}

switch (9) {
    case 9:
       echo "sdf";
        break;
    case 10:
        # code...
        break;

    case 21:
        # code...
        break;
    default:
        echo "123";
        break;
}
#Array
$fanar =  ["ef"];
$arr = array();

$fanar[] = "ef";

$arr[] = "ef";

echo "<br><hr><br>";
echo $fanar[0];
echo "<br><hr><br>";

$zweiDimArr = [
    
    ["Zweite Dimension 1","Zweite Dimension 33"],
    ["Zweite Dimension 2","Zweite Dimension 33"],
    ["Zweite Dimension 3","Zweite Dimension 33","Zweite Dimension 33","Zweite Dimension 33"]
];

echo $zweiDimArr[0][5];
echo "<br><hr><br>";
#Schleifen

foreach ($fanar as $fanarsInhaltZeilefuerZeile) {
    echo $fanarsInhaltZeilefuerZeile.'<br>';
}

for ($i=0; $i < count($zweiDimArr) ; $i++) { 
    for ($j=0; $j < 2 ; $j++) { 
         echo $zweiDimArr[$i][$j].'<br>';
    }
}

#MySQL

#Object


?>