<?php
$num=7;

if($num % 3 ==0 && $num % 5 ==0){
    echo "both can divide";
}elseif($num % 3==0){
    echo "can divide by 3";
}elseif($num % 5==0){
    echo "can divide by 5";
}else{
    echo "none either can divide";
}

?>