<?php
function withParameter($number) {
    echo 10 + $number;
}
withParameter(20);
?>

<?php
function withParameters($number1, $number2) {
    echo $number1 + $number2;
}
withParameters(10, 20);
?>

<?php
function withReturn($number1, $number2) {
   $response = $number1 + $number2; 

   return $response;
}

$var = withReturn(30, 5);
if($var > 50) {
echo "something";
}

echo $var;
    
?>

<?php
function MyFunction($number1, $number2, $number3) {
    $multiply = ($number1 + $number2) * $number3;
    if($multiply > 1){
        $multiply .= " wow";
    }
    return $multiply;
}
$var = MyFunction(1, 2, 4);
echo $var;
?>

<!-- <?php
    function FunctionOne(&$value) {
        $value++;
        echo $value;
}

    $number = 0;
    echo $number;
    FunctionOne($number);
    echo $number;
?> -->  

<?php
    function addNumbers(&$value) {
        $value = 2 + 2;
        echo $value;
    }

    $number = 1;
    addNumbers($number);
    echo $number;

?>