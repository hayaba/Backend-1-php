<?php

// Ignores the default warnings (from connecting to MySQL)
set_error_handler(function() {  });

// Creates the MySQL class
class MySQL {
private $mySQL;

    function __construct() {
        $server = "localhost:3310"; // Change to domain name, e.g. www.iloveunicorns.com
        $username = "root"; // Change to the admins username of the server
        $password = "vupebe28"; // Change to the admins password of the server
        $database = "mobile_app"; // Change to the name of the database you would like to connect to on the server
       $this->mySQL = new mysqli($server, $username, $password, $database);
        
        if(!$this->mySQL) {
            die("Could not connect to the MySQL server: " . mysqli_connect_error());
        }
    }

    function Query($sql, $bool) {
        $response = $this->mySQL->query($sql);

        if(!$response) {
            $json["status"] ="failed";
        } else {
            $json["status"] ="success";
            $data = [];

            while($row = $response->fetch_assoc()) {
                $data[] = $row;
                }
                $json['data'] = $data;
        }

        // -----------------------------------------------------------------------------------
        //   Write your own code, in order to execute a SQL query, and validate the response 
        // -----------------------------------------------------------------------------------

        // Convert the JSON aray to JSON format (string), and return it
        return json_encode($json);
    }
}

?>