<?php
$num1= 25;
$num2=34;
$num3=19;

if($num1 >= $num2 && $num1 >=$num3){
    $greatest = $num1;
}elseif($num2 >= $num1 && $num2 >= $num3){
    $greatest = $num2;
}else{
    $greatest = $num3;
}

if ($num1 <= $num2 && $num1 <= $num3){
    $smallest = $num1;
}elseif ($num2 <= $num1 && $num2 <= $num3){
    $smallest = $num2;
}else{
    $smallest = $num3;
}

echo "the greatest number is:$greatest" ,"<br>"; 
echo "the smallest number is:$smallest";


?>