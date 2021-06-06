<?php

function findSmallestPair($array1, $array2, $k) {
    if ($k > count($array1)*count($array2)) {
        echo "k pairs does not exist";
        return;        
    }
    
    $index2 = array_fill(0, count($array1), 0);

    while ($k > 0) {    
        $minSum = PHP_INT_MAX;
        $minIndex = 0;

        foreach ($array1 as $i => $value1) {
            if ($index2[$i] < count($array2) && ($value1 + $array2[$index2[$i]] < $minSum)) {
                $minIndex = $i;
                $minSum = $value1 + $array2[$index2[$i]];
            }
        }
        echo "[{$array1[$minIndex]}, {$array2[$index2[$minIndex]]}] ";
        $index2[$minIndex]++;
        $k--;
    }
}

 
function bubbleSort(&$arr) { 
    $n = sizeof($arr); 
  
    for($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n - $i - 1; $j++) { 
            if ($arr[$j] > $arr[$j+1]) { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
            } 
        } 
    } 
} 

$array1 = [9, 4, 2];
$array2 = [7, 11, 1, 3];
$k = 3;

bubbleSort($array1);
bubbleSort($array2);
findSmallestPair($array1, $array2, $k);
