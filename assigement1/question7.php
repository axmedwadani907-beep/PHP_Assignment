<?php

$num =24;
$num2=18;

$i=24;
while(true){
    
    if($num % $i==0 && $num2 % $i ==0){
        echo "hcf is $i";
        break;
    }
    $i--;
}

?>
