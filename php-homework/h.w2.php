<?php
function factorialOfNumber($n)
{
$x=1;
$z=1;

while($x<=$n){
$z=$z*$x;
$x=$x+1;

}
return $z;
}

echo factorialOfNumber(10);
?>
