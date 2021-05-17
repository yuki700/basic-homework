<?php

$arr = array(
    array(5, 12, 17, 9, 13),
    array(13, 4, 8, 14, 1),
    array(9, 5, 3, 17, 21),
);

$min = $arr[0][0];
$max = $arr[0][0];
$sum = 0;
$avg = 0;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $sum += $arr[$i][$j];

    
        if ($min > $arr[$i][$j]) {
            $min = $arr[$i][$j];
        }

        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
        }
    }
}
$avg = $sum/15;
echo "line${i}'s sum:${sum}, min:${min}, max:${max}, avg:${avg}". "\n";

?>
