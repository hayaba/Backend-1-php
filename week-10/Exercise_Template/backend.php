<?php
    // -------------------------------------------------------------------------
    //   This script must take care of all API requests, and return a response
    // -------------------------------------------------------------------------

    // Remember to change the login information for the database, inside of mysql.php
    include_once("mysql.php");

    // Function used to execute the MySQL query, and convert the response to JSON format
    function CallMySQL($sqlQuery) {
        // Get access to the global variable $mySQL from the mysql.php script
        global $mySQL;

        // Creates an empty array, in which you can store the data
        $json = [];
        // $json['key'] = "value";
        
        $result = $mySQL->query($sqlQuery); 

        if(!$result) {
            $json["status"] ="failed";
        } else {
            $json["status"] ="success";
            $data = [];

            while($row = $result->fetch_assoc()) {
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

    // Empty variables, used to check what action has been requested
    $action = "";
    // $access = "";

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    // if(isset($_GET['access'])) {
    //     $action = $_GET['access'];
    // }

    // -----------------------------------------------------------------------------------------------
    //   Write your own code, do handle the different requests that are being send from the frontend 
    // -----------------------------------------------------------------------------------------------

    // The values of the actions, comes from the index.php file, where a fetch is being used
    // if($action == "userlistNonJSON") {
       
    // }

    if($action == "userlist") {

        // if($access == 1) {
            $sqlPrint = "SELECT display_name, profile_text FROM userprofile ORDER BY id ASC";
        // }
        // if($access == 5) {
        //     $sqlPrint = "SELECT display_name, profile_text FROM userprofile ORDER BY id DESC LIMIT 5";
        // }  
        echo CallMySQL($sqlPrint);
    }

    if($action == "newest") {
            $sqlPrint = "SELECT display_name, profile_text FROM userprofile ORDER BY id DESC LIMIT 5";
        echo CallMySQL($sqlPrint);
    }
?>