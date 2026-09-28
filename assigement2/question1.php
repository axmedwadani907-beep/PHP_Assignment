<?php
$numbers= [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
$total=0;
$even=0;
$odd=0;
$min=$numbers[0];
$max=$numbers[0];
$ptmin=[];
$ptmax=[];

foreach($numbers as $index => $number){
    $total = $total + $number;

    if($number % 2==0){
        $even=$even+$number;
    }else{
        $odd=$odd+$number;
    }

    if ($number < $min) {
    $min = $number;
    $ptmin = [$index];
    }elseif ($number == $min) {
    $ptmin[] = $index;
    }


    if($number > $max){
        $max=$number;
        $ptmax=[$index];
    }elseif($number == $max){
        $ptmax[]=$index;
    }
    
    



    echo $number ;
 

}
echo"<br>";
echo "Total:  " . $total;
echo"<br>";
echo "Even: = " . $even;
echo"<br>";
echo "Odd: = " . $odd;
echo"<br>";
echo "Min:  " . $min ;
echo"<br>";
echo "Max:  " . $max ;
echo"<br>";
echo "position min:  " . implode(", ", $ptmin) ;
echo"<br>";
echo "position max:  " . implode(", ", $ptmax) ;


?>