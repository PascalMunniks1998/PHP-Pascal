<?php
    $kappersagenda["9.15"] = "Mevr.Pietersen";
    $kappersagenda["9.30"] = "Mevr. Willems";
    $kappersagenda["9.45"] = "";
    $kappersagenda["10.00"] = "Paul van den Broek";
    $kappersagenda["10.15"] = "Karel de Meeuw";
    $kappersagenda["10.30"] = "";
    print("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($kappersagenda as $tijd => $afspraak) {
            if($afspraak == "") {
                print("<li>".$tijd."</li>") ;
            }
        }
    print("</ul>");
?>


