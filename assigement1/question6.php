<?php

$num =8;
$num2=24;

$i=1;
while(true){
    
    if($i% $num==0 && $i % $num2 ==0){
        echo "lcm is $i";
        break;
    }
    $i++;
}

?>
