<?php
    function perimetre(float $L,float $l):float{
        return ($L+$l)*2;
    }
    function surface(float $L,float $l):float{
        return $L*$l;
    }
    function diagonale(float $L,float $l):float{
        return sqrt(pow($L,2)+pow($l,2));
    }

?>