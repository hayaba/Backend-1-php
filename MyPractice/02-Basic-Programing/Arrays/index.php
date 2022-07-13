<!-- 
            Exercise 3
 Create a HTML table with 5 cells in one row
 Create an array with 5 values and print each value in their own cell
 Import one of your JSON files and convert it to an array
 Print the first entity’s values from your json array into the cells instead
     Give the cells a relevant header (Firstname, Lastname etc.)
     If more or less cells are needed to display all values, create/delete the cells
 Create a new row in your table and print the second entity’s values
Bonus:
 Style your table if you got some leftover time 
-->

<!-- 
            Exercise 4
 Create a for-loop that prints all numbers from 0 to 100
     Make the output readable
 Create a foreach-loop that prints all values from an array
 Use a loop to create new rows for all the entities’ values from your json array
Bonus:
 Give every other row a different background color (white, grey, white, grey etc.)
 Replace the foreach-loop with a while-loop 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays & JSON in PHP</title>
</head>
<body>
    <table>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
        </tr>
        <?php
            include("backend.php");
        ?>
    </table>
   

<style>
    td {
        padding: 10px 20px;
        border: 1px solid #000;
    }
</style>
</body>
</html>