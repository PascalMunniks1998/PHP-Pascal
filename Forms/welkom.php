<?php
include ("header.php");



$berichten = array();

if (!isset($_GET["naam"])) {
    $berichten[] = "Vul eerst het formulier in";
} else if (strlen($_GET["naam"]) < 2) {
    $berichten[] = "Een naam heeft minimaal 2 letters";
} else if (strlen($_GET["adres"]) < 3) {
    $berichten[] = "Een adres heeft minimaal 3 tekens";
} else if (strlen($_GET["email"]) < 10) {
    $berichten[] = "Een E-mail adres minimaal 10 tekens";
} else if (strlen($_GET["wachtwoord"]) < 6) {
    $berichten[] = "Een velig wachtwoord heeft minimaal 6 tekens";
}

if (!count($berichten) == 0) {
    $html = "<ul>";
    foreach ($berichten as $bericht){
        $html .= "<li>".$bericht."</li>";
    }
    $html .= "</ul>";
    echo $html;
} else {
    echo "Hallo" .$_GET("naam");
    echo "Je adres is: " .$_GET("adres");
    echo "Je email is: " .$_GET("email");
    echo "Je wachtwoord is: " .$_GET("wachtwoord");
}

include ("footer.php");

?>

