<!-- 
            Exercise 2
 Create two functions that uses the pass by reference method
     One function that adds two numbers together
     One function that subtract two number from each other
     The result should be saved as the value of the first parameter
BONUS:
 Come up with your own idea to when pass by reference could be used
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass by reference vs. pass by value</title>
</head>

<body>
    <?php
    // ______ Pass by reference ________
    function firstFunction(&$value1)
    {
        $value1++;
        echo
        "<h1 style='color:blue;'>"
            . $value1
            . "</h1>";
    }
    $number = 0;
    echo
    "<h1>"
        . $number
        . "</h1>";

    firstFunction($number);
    echo
    "<h1 style='color:red;'>"
        .  $number
        . "</h1>";
    // _______ Simillar function without colors
    function secondFunction(&$value2)
    {
        $value2++;
        echo $value2;
    }
    $nr = 0;
    echo $nr;
    secondFunction($nr);
    echo $nr;
    ?>

    <br><br>

    <?php
    // ______ Pass by value _______
    function passByValue($value)
    {
        $value++;
        echo  "<h1 style='color:blue;'>"
            . $value
            . "</h1>";
    }
    $add = 0;
    echo "<h1>"
        . $add
        . "</h1>";
    passByValue($add);
    echo  "<h1 style='color:red;'>"
        . $add
        . "</h1>";

    // _______ Simillar function without colors
    function addOne($someNr)
    {
        $someNr++;
        echo $someNr;
    }
    $one = 0;
    echo $one;
    addOne($one);
    echo $one;
    ?>

</body>

</html>