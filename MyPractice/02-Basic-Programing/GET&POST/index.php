<!-- 
                   Exercise 2
 Create a FORM which has two NUMBER input fields and a submit button
     The form must use the GET method
 Write some PHP code that ADDS the two numbers together
 Use PHP to make sure the two inputs are not empty
BONUS
 Split the code into two files, and use a header in PHP to redirect with the 
”result” saved in the URL (GET)
 Create multiple buttons in the form to:
     Subtract, Multiply, Divide 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST Methods</title>
</head>
<body>
    <center>
    <h1>MY PHP Basic</h1>
    <form action="backend.php" method="get">
        <label for="n1">Enter a number between 1 - 9:</label>
        <input type="number" name="n1" min="1" max="9">
        <br>
        <br>
        <label for="n1">Enter a number between 1 - 9:</label>
        <input type="number" name="n2" min="1" max="9">
        <br>
        <br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/">
    </form>
    </center>
</body>
</html>