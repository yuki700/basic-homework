<?php

function primeNumber($n){

    $x = 2;
    $z = 0;
    $isPrimeNumber=true;

    if($n == 0 || $n == 1){
        $isPrimeNumber=false;
    }elseif($n == 2){
        return true;
    }
       
    while($x < $n){
        $z = $n % $x;
        $x++;

        if ($z == 0){
            $isPrimeNumber=false;
            break; 
        }else{
            return true;
        }
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