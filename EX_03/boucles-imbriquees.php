<?php

    function clock() {
        for ($heures=0;$heures<24;$heures++) {
            for ($minutes=0;$minutes<60;$minutes++) {
                if ($heures<10) {$heures_display='0'.$heures;} else { $heures_display=$heures;}
                if ($minutes<10) {$minutes_display='0'.$minutes;} else { $minutes_display=$minutes;}
                echo '<p>'.$heures_display.':'.$minutes_display.'</p>';
            }
        }
    }

clock();

?>