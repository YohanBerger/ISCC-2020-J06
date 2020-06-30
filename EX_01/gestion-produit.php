<?php
    function update_dispo($quantite) {
        if ($quantite > 0) {
            $disponible=true;
            return $disponible;
        }
        else {
            $disponible=false;
            return $disponible;
        }
    }
    function restockage($quantite,$nb_ajout) {
        echo '<p>'.$nb_ajout.' produits ont été ajoutés au stock</p>';
        $quantite = $quantite + $nb_ajout;
        return $quantite;
    }
    function achat($quantite,$nb_achat) {
        echo '<p>'.$nb_achat.' produits ont été achetés</p>';
        $quantite = $quantite - $nb_achat;
        return $quantite;
    }






?>