<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = "Haya";
    $age = 26;
    $year = 2022;
    ?>

    <div class="bDate">
        <h1><?php
            echo $year - $age;
            ?></h1>
    </div>

    <form method="get" action="?">
        <input type="number" name="myInput">
        <input type="number" name="anotherInput">
        <input type="submit" value="CLICK">
    </form>

    <?php
    include("backend.php");
    ?>

    <form method="post" action="?">
        <input type="text" name="postInput">
        <input type="submit" value="CLICK">
    </form>

    <style>
        body {
            background-color: #ccddf1;
        }

        .bDate {
            text-align: center;
            border: solid 2px #ffaa22;
            margin-bottom: 10pxF;
        }
    </style>

</body>

</html>