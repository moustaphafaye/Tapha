<?php
    function estnbre( $n):bool{
        return is_numeric($n);
    }
    function vide( $n):bool{
        return empty($n);
    }
    function positif($n):bool{
        if($n>0){
            return true;
        }else{
            return false;
        }
    }
    //valider les nombre 
    function validNombre($n,string $cle,array &$arrError ):void
    {
        if(vide($n))
        {
            $arrError[$cle]="Veullez saisir une valeur";
        }else
        {
            if(!estnbre($n))
            {
                $arrError[$cle]="Veullez saisir un nombre";
            }else{
                if(!positif($n)){
                    $arrError[$cle]="Veullez saisir un nombre positif";
                }
            }
        }
        
    } 
    function table($n):void{
        echo "la table de mutiplication :".$n. "<br>";
        $i=1;
        while($i<=10){
            echo $n." x ".$i." = ". $n*$i."<br>";
            $i++;
        }
    }