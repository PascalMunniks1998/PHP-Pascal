<?php
include("header.php");
$a = 100;

Function celsius_naar_fahrenheit($a) {
    $b = ($a * 9/5) + 32;

    echo "{$a} Celsius is {$b} fahrenheit";

}
celsius_naar_fahrenheit($a);
echo "<br>";

Function delen() {
    $a = 9;
    if($a % 3 == 0) {
        $check = true;
    }
    else {
        $check = false;
    }
    return $check;
}
if(delen()) {

    echo "Getal is deelbaar door 3";
}
else {
    echo "Het getal is niet deelbaar door 3";
}
delen();
echo "<br>";
Function terug_string() {
    $brengterug = "Dit is een omgekeerde string";
    echo ("$brengterug");

    return $brengterug;
}
terug_string();
include("footer.php");
?>