<!-- 
                    Exercise 1
. Create a DIV in HTML and style it with CSS
    . You can create a seperate .css file or include it in the div tag
. Change the font size and make the border visible
. Create two integer variables in PHP
. Add the two integers together and display the result in the DIV
. Try creating the variables in their own file and include it 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mixing HTML + PHP</title>
</head>
<body>
    <?php
    include("phpTest.php")
    ?>
    <div>
        <?php
        echo $newVar;
        ?>
    </div>
</body>

</html>