<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #baefff;">

<center>
<?php 
session_start();
$_SESSION['name'] ="web";
echo $_SESSION['name'] . "<br>";

setcookie("key","someValue",time()+50000);
if(isset($_COOKIE["key"])) {
    echo $_COOKIE["key"];   
}


// ........................... Excercis 1 ....................................
$integerVar1 = 2;
$stringVar1 = "Hello World!";
$stringVar2 = "How u doin?";
$booleanVar = true;
$integerVar2 = -23;
$floatVar = 2.437432;
$float = -0.099;
$doubleVar = 124.970004;
$object = '3';
$object1 = 'M';
$string = "Tip: you can create new var to save the results from adding";
// $tip = $stringVar1.$stringVar2;


echo "<br>" . $stringVar1 . " " . $stringVar2 . "<br>";
echo $integerVar1 + $integerVar2 . "<br>";
echo $object . "<br>";
echo $string . "<br>";
// echo "<br/>";
// echo $tip;
// echo rand(1, 10);


// ............................ Exercis 2 .................................
if ($integerVar1 > 10) {
    echo $integerVar1 . "<br>";
}

if ($integerVar1 < 10) {
   echo $integerVar1 . "<br>";
}

if ($integerVar2 < 10) {
    echo $integerVar2 + 5 . "<br>";
}

$name1 = "Proleo";
$name2 = "Majd";
$age = 26;
if ($name1 != $name2) {
    echo $name1 . " " . $name2 . "<br>";
}

if ($age <= 27 && $name1 == "Proleo") {
    echo $name1 . " is " . $age . " years old.<br>";
}

if ($age == 26 || $name2 == "Majed") {
    echo $age -5 . "<br>";
}

if ($name1 != "Proleo" && $name2 == "Proleo") {
    echo $name1 . "<br>";
} else {
    echo $name2 . "<br>";
} 

if ($name1[0] == 'P') {
    echo "Hey you did it <br>";
}

if ($name1[0] != 'P') {
    echo "Something <br>";
} else {
    echo "Something else <br>";
}
?>

</center>
    
</body>
</html>
