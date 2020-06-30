<?php
$maximum= 10;
$nb=1;

    function compter($maximum,$nb) {
        while ($nb<=$maximum) {
            echo '<p>'.$nb.'</p>';
            $nb=$nb+1;
        }
    }

    function compter_for($maximum,$i) {
        for ($i=1; $i<=$maximum; $i++) {
        echo '<p>'.$i.'</p>'; }
    }

    compter($maximum,$nb);
    compter_for($maximum,$nb);
?>