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
        return false;
    } else {
        return true;
    }
}


function primeNumbertotal($tn){
    $result = [];
    for ($i = 1; $i <= $tn; $i++){
        if (primeNumber($i)) {
            array_push($result, $i);
        }
    }
    return $result;
}

print_r(primeNumbertotal(20));

?>