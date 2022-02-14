<?php


   function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }

    
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre); 
}

function equationSecondDegre(float $a,float $b,float $c){
        $delta=pow($b,2)-(4*$c*$a);
        echo "delta est égal à: ".$delta."<br>";
        if($delta>0){
        $x1=-sqrt($delta)-$b/2*$a;
        $x2=+sqrt($delta)-$b/2*$a;
        echo "les deux solutions sont :".$x1. " et ".$x2;
        }elseif($delta==0){
            echo "La solution est ".(-1*$b/2*$a);
        }else{
            echo "L'equation n'a de solution"."<br>";
        }
}