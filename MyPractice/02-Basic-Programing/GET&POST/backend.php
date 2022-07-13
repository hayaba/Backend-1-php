<?php
$oprnd = $_GET['sub'];
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
if (!empty($_GET['n1']) && !empty($_GET['n2'])) {

    if ($oprnd === "+") {
        $result = $num1 + $num2;
    } else if ($oprnd === "-") {
        $result = $num1 - $num2;
    } else if ($oprnd === "x") {
        $result = $num1 * $num2;
    } else if ($oprnd === "/") {
        $result = $num1 / $num2;
    }
} else if (!empty($_GET['n1']) && empty($_GET['n2'])) {
    $result = $num1;
} else if (empty($_GET['n1']) && !empty($_GET['n2'])) {
    $result = $num2;
} else if (empty($_GET['n1']) && empty($_GET['n2'])) {
    $result = "Oops, there is nothing to calculate!";
}

header("location:index.php?response=" . str_replace(' ', '-', $result));
?>