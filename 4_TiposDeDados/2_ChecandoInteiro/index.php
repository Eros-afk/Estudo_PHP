<?php

    if(is_int(5)){
        echo "É um inteiro <br>";
    }

    #Isso não é um inteiro logo não vai aparecer
    if("aaaaaa"){
        echo "É um inteiro <br>";
    }

    $a = 10;

    if(is_int($a)){
        echo "É um inteiro 10 <br>";
    }

    $b = 12.00;
    if(is_float($b)){
        echo "É float";
    }
    
    