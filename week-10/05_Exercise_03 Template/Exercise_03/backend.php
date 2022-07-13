<?php
    // -------------------------------------------------------------------------
    //   This script must take care of all API requests, and return a response
    // -------------------------------------------------------------------------

    // ----------------------------------
    //   Exercise 3: Custom MySQL Class
    // ----------------------------------
    include_once("classes/MySQL.php");
    $mySQL = new MySQL(true);

    // Empty variables, used to check what action has been requested and what access level is allowed 
    $action = "";
    $accessLevel = 0;

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if(isset($_GET['access'])) {
        $accessLevel = $_GET['access'];
    }

    if($action == "userlist") {
        // Check if the user has ADMIN access (1 = user, 5 = admin)
        if($accessLevel == 5) {
            $sql = "SELECT display_name, profile_text, profile_active, access_level, creation_time FROM userprofile ORDER BY id ASC";
        } else {
            $sql = "SELECT display_name, profile_text FROM userprofile ORDER BY id ASC";
        }

        // Return the SQL response to the frontend as JSON
        echo $mySQL->Query($sql, true);
    }

    if($action == "newest") {
        // Check if the user has ADMIN access (1 = user, 5 = admin)
        if($accessLevel == 5) {
            $sql = "SELECT display_name, profile_text, profile_active, access_level, creation_time FROM userprofile ORDER BY id DESC LIMIT 5";
        } else {
            $sql = "SELECT display_name, profile_text FROM userprofile ORDER BY id DESC LIMIT 5";
        }

        // Return the SQL response to the frontend as JSON
        echo $mySQL->Query($sql, true);
    }
?>