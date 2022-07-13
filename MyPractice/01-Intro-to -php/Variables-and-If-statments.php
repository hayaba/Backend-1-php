<!-- 
                    Exercise 1
. Create a new file in Visual Code named ”myVariables.php”
. Create 10 different variables, with different values
. Print the variables on the screen
    . Make sure there are breaks in between (makes them readable)
. Add together two int variables and print the result
    . $var1 + $var2
. Add together two string variables and print the result
    . $varOne . $varTwo
Tip: You can create new variables to save the results from adding 
-->


<!-- 
                        Exercise 2
. Create 5 different if-statements, each with a different logic
    . Only display numbers above 10
    . Subtract 5 from a variable if it’s more than 10
    . Add two names together if they are different
    . Etc.
. Create 2 different if-statements, where you use an OPERATOR
    . Only display name if it starts with K and age is more than 30
    . Etc. 
-->


<!-- 
                        Exercise 3
. Create a session and print it on the screen
. Delete/outcomment the code that creates the session, refresh your browser
    . What happens?
. Close the browser and open the ”myVariables.php” file again
    . What happens?
. Create two cookies and print them on the screen
    . One should expire in 30 seconds
    . The other should expire in 4 hours
. Delete the code that creates the cookies, refresh your browser
    . What happens?
. Close the browser and open the ”myVariables.php” file again
    . What happens? 
-->

<?php

// ------------------------- Exercise 3 | Session -------------------------------
session_start();
$_SESSION['sessionKey'] = "This is SESSION's value";
    echo "<center>" . $_SESSION['sessionKey'] . "</center>";

// ------------------------- Exercise 3 | Cookies -------------------------------
setcookie("key", "my first COOKIE value", time() + 30);
if(isset($_COOKIE["key"])) {
    echo "<center>" . $_COOKIE["key"] . "</center>";
}
// delete COOKIE
// setcookie("key", "my first COOKIE value", time() - 60);

// ------------------------- Exercise 1 | declaring variables -------------------------------
$bYear = 1995;
$bMonth = 8;
$currentYear = 2022;
$currentMonth = 4;
$age = $currentYear - $bYear;
$firstName = "Haya";
$lastName = "Barakat";
$sign = "Lio";
$sport = "Boxing";

// ------------------------- Exercise 2 | Logic: if-statments -------------------------------
if($age == 27 || $firstName[0] < "J") {
echo $firstName . " is " . $age . " years old.";
}

if($currentYear > 2020)
echo ("<br>");
echo $currentYear - 5;

if($firstName != $lastName) {
echo ("<br>");
echo $firstName . " " . $lastName;
}

?>


<?php
// ------------------------- Exercise 1 | arrays testing -------------------------------
$name = "Haya";
$nickName = "Proleo";
$siblings  = ["Nour", "Abode", "Hatem", "Majed", "Majd", "Salem", "Sameer", "Essam"];
$myAge = 26;
$hobbies = ["drawing", "painting", "boxing", "sport", "listeing to music", "reading", "walking"];

echo $name . " likes " . $hobbies[0];
echo "<br>";
// count() function shows the length of an array
echo $name . " has " . count($siblings) . " siblings!";
?>