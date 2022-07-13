<center>

    <?php
    $lookFor = ["1", "2"];
    $replaceWith = ["A", "B"];
    $password = "12CD12";

    $encrypt = str_replace($lookFor, $replaceWith, $password);
    echo $password
        . "<br>"
        . $encrypt
        . "<br>";

    $passEncrypt = password_hash($password, PASSWORD_DEFAULT);
    echo $passEncrypt
        . "<br>";

    $passEncrypt = password_hash($password, PASSWORD_DEFAULT);
    echo $passEncrypt;
    ?>

</center>