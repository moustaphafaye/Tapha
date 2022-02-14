<?php

    function control(int $a,int $b,int $c){
        if($a==0){
            echo "l'equation n'est du second degre \n ";
            if($b==0)
            {
                if($c==0)
                {
                    echo "on a une infinie de solution"."<br>";
                }
                else{
                    echo "Pas de solutions"."<br>";
                }
            }
            else{
                $solut=-1*($b/$c);
                echo "la solution est :".$solut."<br>";
            }

        }
        else{
            $del=pow($b,2)-4*($a*$c);
            if($del=0){
                $solut= -1*($b/2*$a);
                echo "delta est egale à : ".$del."<br>";
                echo "la solution unique est: ".$solut."<br>";
            }
            elseif($del<0){
                echo "Il n'y a pas de soltion car delta est negatif"."<br>";
            }
            else{
                $x1=(-$b-sqrt($del))/2*$a;
                $x2=(-$b+sqrt($del))/2*$a;
                echo "les solutions de l'equation sont : ".$x1." et ".$x2;

            }
            

        }
    }
