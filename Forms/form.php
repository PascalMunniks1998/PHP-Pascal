<?php
include ("header.php");
?>

    <form action="welkom.php" method="GET">
        Naam <input type="text" name="naam"><br>
        Adres <input type="text" name="adres"><br>
        E-Mail <input type="text" name="email"><br>
        Wachtwoord <input type="password" name="wachtwoord"><br>
        <input type="submit">
    </form>

<?php
include ("footer.php");
?>