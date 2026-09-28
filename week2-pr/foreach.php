<?php
$fruits=["Apple","banana","orange","mango","grape"];

$student=[
    "Student1"=>[
        "Name" => "Ahmed",
        "Age" => "20",
        "Grade"=> "A"],
    "Student2"=>[
        "Name" => "Ali",
        "Age" => "21",
        "Grade"=> "B"],
    "Student3"=>[
        "Name" => "Hassan",
        "Age" => "19",
        "Grade"=> "A"]
];

foreach($student as $columns){
    echo $columns["Name"]." - ";
    echo $columns["Age"]." - ";
    echo $columns["Grade"];
    echo"<br>";
}
echo "<br>";
foreach($fruits as $index=> $fruit){
    echo $fruit;
    echo "<br>";
}

?>