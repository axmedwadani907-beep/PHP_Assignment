<?php
echo"Even number: ";
for($i=2; $i<=20; $i++){
    if($i % 2==0){
        echo  $i;
    }
};
echo "<br>";
for($i=1; $i<=10; $i++){
    if($i==6){
        break;
    }
    echo "$i&nbsp";
};
echo "<br>";
for($i=1; $i<=10; $i++){
    if($i==5){
        continue;
    }
    echo "$i&nbsp";
}
echo "<br>";
for($i=1; $i<=3; $i++){
    for($j=1; $j<=3; $j++){
        echo "*";
    }
    echo "<br>";
}


?>