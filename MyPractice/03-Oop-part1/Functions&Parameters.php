<!-- 
            Exercise 1
 Create a function with one parameter
     Must add the number with itself
     Print the result on the screen
 Expand the function to take two parameters, and add those instead
 Return the result from the addition, instead of printing it directly
 Create a second function that can multiply, and return the result
BONUS:
 Create a new function that can return the sum of an array of int 
-->

<?php
// function myFunction($oneParameter) {
//     echo 2 + $oneParameter;
// }
// myFunction(4);

// function add($nrOne, $nrTwo) {
//     echo $nrOne + $nrTwo;
// }
// add(3, 4);

function add($nrOne, $nrTwo) {
    $result = $nrOne + $nrTwo;
    return $result;
}
$print = add(2, 7);
echo $print;

function multiply($nr1, $nr2) {
    $answer = $nr1 * $nr2;
    return $answer;
}
$var = multiply(4, 2);
echo "<br>" . $var;

// _____function that can return the sum of an array of int_____
$myArray = [3, 4, 6, 1, 55, 9, 23, 91];

function arraySum($array){
    $total = 0;
    foreach($array as $value){
        $total += $value;
    }
    return $total;
}
$myAnswer= arraySum($myArray);
echo "<br>" . $myAnswer;
?>