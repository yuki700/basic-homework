<?php
$a = [1, 2, 3, 4, 5];
$b = [4, 5, 3, 2, 10];
$c = [];

for ($i = 0; $i < 5; $i++) {
    $c[$i] = $a[$i] + $b[$i];

    echo "${c[$i]},";
}
?>
