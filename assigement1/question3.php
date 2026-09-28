<?php

echo "odd number<br>";

for($i = 2; $i <= 20; $i++){

    if($i % 2 != 0){
        echo "$i<br>";
    }

}

echo "even number<br>";

for($i = 35; $i >= 7; $i--){

    if($i % 2 == 0){
        echo "$i<br>";
    }

}

?>