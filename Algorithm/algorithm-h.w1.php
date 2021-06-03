<?php  
  
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
   
$arr = array(5, 3, 1, 9, 8, 2, 4, 7); 
bubbleSort($arr); 
  
echo "the largest pair sum : \n"; 
echo $arr[sizeof($arr) - 1] + $arr[sizeof($arr) - 2]." ";  
  
?> 