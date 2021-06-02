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

 
function partition(&$array, $left, $right) {
    $pivot = $array[($right + $left) / 2];
    $i = $left;
    $j = $right;
    while ($i <= $j) {
        while ($array[$i] < $pivot) $i++;
        while ($array[$j] > $pivot) $j--;
        
        if ($i <= $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
            $j--;
        }
    }
    return $i;
}
 
function quicksort(&$array, $left, $right) {
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array,$left,$pivotIndex -1 );
        quicksort($array,$pivotIndex, $right);
    }
}

$array1 = [9, 4, 2];
$array2 = [7, 11, 1, 3];
$k = 3;

quicksort($array1, 0, count($array1) - 1);
quicksort($array2, 0, count($array2) - 1);
findSmallestPair($array1, $array2, $k);
