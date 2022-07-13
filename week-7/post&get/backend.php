<?php
if (!empty($_GET["myInput"]) && !empty($_GET["anotherInput"])) {
    echo "This is GET method input: " .
        $_GET["myInput"] + $_GET["anotherInput"];
} else if (empty($_GET["myInput"]) xor empty($_GET["anotherInput"])) {
    echo $_GET["myInput"] . $_GET["anotherInput"];
} else if (empty($_GET["myInput"]) && empty($_GET["anotherInput"])) {
    echo "Oops, There are no numbers to calculate yet!";
}

if (!empty($_POST)) {
    echo "This is POST method input: " .
        $_POST["postInput"];
}
?>