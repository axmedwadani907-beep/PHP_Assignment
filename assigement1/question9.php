<?php

$num=17;
$isprime=true;

for($i=2; $i<$num; $i++){
    if($num % $i==0){
        $isprime=false;
        break;
    }
}
if($isprime==true){
    echo"$num is prime";
}else{
    echo"$num is non-prime";
}

?>
