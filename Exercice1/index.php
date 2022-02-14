<?php
//Charge mes fonctions ou inclure
include_once("fonctions.php");

    const VAL_MIN=1;//Je veux pas le voir
    define("VAL_MAX",100);
  //Generer un nbre de maniere 
  //aleatoire entre 1 et 100
    $cote=rand(VAL_MIN,VAL_MAX) ;
    echo "Le Cote est ".  $cote."<br>";
    calculCarre($cote);
    $peri=perimetre($cote);
    echo "Le Perimetre est ". $peri."<br>";
    echo "faye";
?>