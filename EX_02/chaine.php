<?php
    $str1 = 'La maîtrise des fondamentaux du code et de la programmation
    dans les domaines du business, du marketing et de la communication est un avantage sérieux
    et utile.';
    
    echo '<p>La chaine str1 contient '.strlen($str1).' caractères.</p>';
    echo '<p>La chaine str1 contient '.str_word_count($str1).' mots.</p>';
    echo '<p>'.mb_strtolower($str1).'</p>';
    echo '<p>'.mb_strtoupper($str1).'</p>';
    echo '<p>'.str_shuffle($str1).'</p>';
    echo '<p>'.str_replace("la","LA",$str1).'</p>';
    echo '<p>'.($str1).'</p>';
    echo '<p>'.str_replace("est un avantage sérieux
    et utile.","",$str1).'</p>';
?>