<?php
    //appel des fonctions 
    require_once "fonction2.php";
    $L=rand(30,50);
    echo "la longueur est :" .$L;
    echo "<br>";
    $l=rand(10,30);
    echo "la largeur est :" .$l;
    echo "<br>";
    echo "Affichage apres calcul"."<br>";
    echo "le perimetre est :" .perimetre($L,$l)."<br>";
    echo "le surface est :" .surface($L,$l)."<br>";
    echo "la diagonale est :" .diagonale($L,$l)."<br>"."<br>"."<br>";

    echo "MOUSTPAHA FAYE";





?>