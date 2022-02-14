<?php
    function estnombre($n):bool{
        return is_numeric($n);
    }
    function vide($n):bool{
        return empty($n);
    }
    /*function validnbr($n,string $key,array &$arrError):void{
        if(vide($n)){
            $arrError[$key]="veuiller saisir une valeur svp :";
        }else
            if(!estnombre($n)){
                $arrError[$key]="veuiller saisir un nombre svp :";
            }
   } */

   function jourvalide($j,string $cle,array &$tab):void 
   {
       if (empty($j))
       {
           $tab[$cle]="Veuillez saisir le champ jour :";
       }
       else
       {
           if(is_numeric($j))
           {
               if($j<1 or $j>31)
               {
                    $tab[$cle]="Veuiller saisir une valeur entre 1 et 31 :";
               }

           }
           else
           {
                $tab[$cle]="Veuillez saisir un nombre dans le champ jour :";
           }
       }
   }

   function moisvalide($m,string $cle,array &$tab):void 
   {
       if (empty($m))
       {
           $tab[$cle]="Veuillez saisir le champ mois :";
       }
       else
       {
           if(is_numeric($m))
           {
               if($m<1 or $m>12)
               {
                    $tab[$cle]="veuiller saisir une valeur entre 1 et 12 :";
               }

           }
           else
           {
                $tab[$cle]="Veuillez saisir un nombre dans le champ mois";
           }
       }
   }

function anvalide($a,string $cle,array &$tab):void 
   {
       if (empty($a))
       {
           $tab[$cle]="Veuillez saisir le champ annee";
       }
       if(!is_numeric($a))
       {
            $tab[$cle]="Veuillez saisir le champ annee";
       }
   }


   function bixel(int $a):bool
   {
       if((($a%4==0)&&($a%100!=0)) || (($a%400)==0))
       {
           return true;
       }
       else
       {
           return false;
       }
   }
   function nbrej($m,$a):int
   {
       
       if($m==2)
       {
           if(bixel($a))
           {
               $nj=29;
           }
           else
           {
               $nj=28;
           }
       }
       else
       {
            if($m==4||$m==6||$m==9||$m==11)
            {
                $nj=30;
            }
            else
            {
                $nj=31;
            }
       }
        
            return $nj;
   }
   //date suivante 
   function datevalide($j,$m,$a,$cle,&$tab):void 
   {
        $njm=nbrej($m,$a);
        

        if($j>$njm)
        {
            $tab[$cle]="Votre date est invalide!!!";
        }
   }      
   function datesuit($j, $m, $a):void
   {
          $nn=nbrej($m,$a);

          if($j!=$nn)
          {
              $j++;
          }
          else
          {
              $j=1;
              if($m!=12)
              {
                  $m++;
              }
              else
              {
                  $m=1;
                  $a++;
              }
          }
          echo "la date suivante est :".$j." : ".$m." : ".$a."<br>";
    }
    function precedent($j, $m, $a):void{
        $nbb=nbrej($m,$a);
        if($j!=1)
          {
              $j=$j-1;
          }
          else
          {
              $j=$nbb;
              if($m!=1)
              {
                  $m=$m-1;
              }
              else
              {
                  $m=12;
                  $a=$a-1;
              }
          }
          echo "la date présedante est :".$j." : ".$m." : ".$a."<br>";
    }
    

    
       
?>
