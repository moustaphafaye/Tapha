<?php
    function estnbre( $n):bool{
        return is_numeric($n);
    }
    function vide( $n):bool{
        return empty($n);
    }
    function superieur($n):bool{
         if($n>1){
            return true;
        }else{
            return false;
         }
    }
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
                if(!superieur($n)){
                    $arrError[$cle]="Veullez saisir un nombre superieur de 10000 svp";
                }
            }
        }
        
    }
    
    function moyen($n):float{
        
        $i=1;
        $som=0;
        while($i<=$n)
        {
            $som=$som+$i;
            $i++;
        }
            $moy=$som/$n;
            return $moy;
    }
    function premier($n):bool{
        $j=2;
       
        while($j<=($n/2)){
            if($n%$j==0){
              return false;  
            }
            $j++;
        }
        return true;
    }
    function premiertout($n):void{
        echo "Voici la liste des nombre premier "."<br>";
        $j=0;
        echo "<table >";
        for($i=1;$i<=$n;$i++){ 
            if(premier($i)){
                
                echo  "<tr><td>".$array['inferieur'][$j]=$i."</td></tr>";
                $j++;
            }
        }
        echo "</table>";
        echo "<br>"."il exeste  ".$j." nombre premier entre 1 et ".$n;
        echo "<br><br>";
    }
    function moyenne($n){
        $xx=moyen($n);
        echo "<strong>La moyenne est </strong><strong>".$xx."</strong>"."<br>";
        $j=0;
        echo "<table >";
        
        for($i=1;$i<=$n;$i++){
            if($i<$xx){
                $j++;
               echo "<tr><td>".$array['inferieur'][$j]=$i."</td></tr>";
            }
        }
        echo "</table>";
        echo "<br><br>";
        echo "<table>";
        for($i=1;$i<=$n;$i++){
            if($i>$xx){
                $j++;
               echo "<tr><td>".$array['superieur'][$j]=$i."</td></tr>";
            }
        }
        echo "</table>";
    }
?>
<link rel="stylesheet" href="tab.css">