<center>

<?php
include("mysql.php");

$name = $_POST["displayname"];
$pass = $_POST["password"];
$passEncrypt = password_hash($pass, PASSWORD_DEFAULT);
echo $name;
echo $passEncrypt;

if(isset($_POST['signup'])) {
   
    $sql = "INSERT INTO userlogin(username, password) VALUES ('$name', '$passEncrypt');";
    $mySQL->query($sql);
    // header("location:frontend.php");
}

if(isset($_POST['login'])) {
    
}

?>

</center>