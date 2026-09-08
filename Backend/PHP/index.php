<?php
echo("Hello \n");
echo("Hello World! \n");


$name = "Samnang";
$age = 22;
$price = 10.50;
$value = null;
$isActived = true;
$student[]="";


echo("Hello,$name"."\n");
echo("Age: $age <br>");
echo("New line <br>");

$students = ["Samnang","Nang","Raksmey"];
echo("student : $students[1]");
$students = ["Rot"];
$count = count($students);

$studentJson = [
    'name' => "Samnang",
    'age'=> 21
];

echo "\nHello: ". $studentJson['name']."\n Age: ".$studentJson['age'];

str_replace('Samnang','NangNoob', $name);