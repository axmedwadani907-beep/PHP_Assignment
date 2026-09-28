<?php





for($j=10; $j<=50; $j++){
   $isprime=true;

    for($i=2; $i<$j; $i++){
        
        if($j % $i ==0){
            $isprime=false;
            break;
        }
    }

    if($isprime==true){
    echo"$j is prime", "<br>";
}else{
    echo"$j is non-prime &nbsp";
}

}


?>
