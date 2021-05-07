<?php

function primeNumber($n){

    $x = 2;
    $z = 0;
    $y = 1;

    while($x < $n){
        $z = $n % $x;
        ++$x;

        if ($z == 0){
            $y = 0;
            break;  
  
        }
     }
   
    if($y == 0 || $n == 0 || $n == 1){
        echo "This is prime number";
    } else {
        echo "This is not prime number";
    }
}


primeNumber(2);

?>