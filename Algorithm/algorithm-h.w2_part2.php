<?php

function makeAllpairs ($array1, $array2) {
    $array3 = array();
    for ($i = 0; $i < count($array1); $i++){
        for($e = 0; $e < count($array2); $e++){
            $array_pair = array($array1[$i], $array2[$e]);
            array_push($array3, $array_pair);
        }
    }
    return $array3;
}

function bubblePairSort(&$array) { 
    $n = sizeof($array); 
  
    for($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n - $i - 1; $j++) { 
            if ($array[$j][0] + $array[$j][1] > $array[$j+1][0] + $array[$j+1][1]) { 
                $t = $array[$j]; 
                $array[$j] = $array[$j+1]; 
                $array[$j+1] = $t; 
            } 
        } 
    } 
} 


$array1 = [9, 4, 2];
$array2 = [7, 11, 1, 3];
$k = 3;

$array3 = makeAllpairs($array1, $array2);
bubblePairSort($array3);

for($i = 0; $i < $k; $i++){
    print_r($array3[$i]);
}