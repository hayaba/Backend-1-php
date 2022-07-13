<?php
    $server = "localhost:3310"; // Change to domain name, e.g. www.iloveunicorns.com
    $username = "root"; // Change to the admins username of the server
    $password = "vupebe28"; // Change to the admins password of the server
    $database = "mobile_app"; // Change to the name of the database you would like to connect to on the server

    $mySQL = new mysqli($server, $username, $password, $database);

    if(!$mySQL) {
        die("Could not connect to the MySQL server: " . mysqli_connect_error());
    }
?>