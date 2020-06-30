<?php
$maximum= 100;
$nb= 1;
$dizaine= array(10,20,30,40,50,60,70,80,90);
$centaine= array(100);

    function compter_dizaine($maximum,$nb,$dizaine,$centaine) {
        while ($nb<=$maximum) {
            echo '<p>'.$nb.'</p>';
            if (in_array($nb, $dizaine)) {
                echo 'Ceci est une dizaine'; }
            if (in_array($nb, $centaine)) {
                echo 'Ceci est une centaine';
            }
            $nb=$nb+1;
        }
    }

    compter_dizaine($maximum,$nb,$dizaine,$centaine)
?>