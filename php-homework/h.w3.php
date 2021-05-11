<?php

function primeNumber($n){

    $x = 2;
    $z = 0;
    $isPrimeNumber=true;

    if($n == 0 || $n == 1){
        $isPrimeNumber=false;
    }
       
    while($x < $n){
        $z = $n % $x;
        ++$x;

        if ($z == 0){
            $isPrimeNumber=false;
            break; 
        }
     }
   
    if($isPrimeNumber){
        echo "This is prime number";
    } else {
        echo "This is not prime number";
    }
}

primeNumber(123);

?>