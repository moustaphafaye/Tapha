<?php 
   //Procedures  "" ou ''=>chaine
     function calculCarre(int $cote):void{
       $peri= $cote*4;
       $surf=$cote*$cote;
       $diag= sqrt(2*pow($cote,2));
       echo "Le Perimetre est ". $peri."<br>";
       echo "La Surface  est $surf <br>";
       echo 'La Diagonale  est '.$diag .'<br>';
   }

   //Fonctions 
   function perimetre(int $cote):int{
        return $cote*4; 
    }
    function surface(int $cote):int{
        return $cote*$cote; 
    }
    //X puissance n =>pow(x,n)
    function diagonale(int $cote):float{
        return sqrt(2*pow($cote,2));
        
    }
    
    echo " gout";
    ?>



   