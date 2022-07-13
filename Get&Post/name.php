<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="name.php" method="post">
        <label for="firstname">First name: </label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Last name: </label>
        <input type="text" name="lastname" id="lastname">

        <input type="submit" value="GO">
    </form>

<?php
if(!empty($_POST['firstname']) && !empty($_POST['lastname'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    echo 
        "Welcome to the website " . 
        htmlspecialchars($firstName, ENT_SUBSTITUTE, 'UTF-8') . 
        ' ' .
        htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . 
        '!'
    ;
}
?>

</body>
</html>