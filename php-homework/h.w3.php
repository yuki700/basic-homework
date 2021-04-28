<?php

function sosu($n){

$x=2;
$z=0;
$y=1;

    while($x<$n){
        $z=$n%$x;
        ++$x;

if ($z == 0) {

  $y=0;
  break;  
  
  }
}
   
if($y==0 || $n == 0 || $n == 1){

echo "素数じゃない!";
}
else {
    echo "素数だよ?!";
  }
}


sosu(2);

?>