<?php
    // Create a connection to the MySQL Server
    include("mysql.php");

    // Variables used to customize this script
    $headerURL = "index.php";
    $redirectToURLAtTheEnd = true;

    // Variables used when adding to the return header URL
    // ! (DO NOT CHANGE) !
    $urlFirstVar = true;


    // +----------------------------------------------------+
    // | POST Methods being called with identifier "action" |
    // +----------------------------------------------------+

    // Checks if the post[action] is set
    if(isset($_POST['action'])) {
        $action = $_POST['action'];

        // SIGN UP
        if($action == "signup") {
            // Converts the POST variables to normal variables (making them easier to use)
            $displayname = $_POST['displayname'];
            $profile = $_POST['profile'];
            $errors = false; // Control variable, used to check if any errors are made in the signup form

            // Checks if the different input fields are blank
            if($displayname == "") {
                AddHeaderURL("displayname=error");
                $errors = true;
            }
            if($profile == "") {
                AddHeaderURL("profile=error");
                $errors = true;
            }

            // If no errors (blank input fields), then add the user to the database
            if(!$errors) {
                $sql = "CALL AddNewUser('$displayname', '$profile', '1')";
                
                if($mySQL->query($sql) === TRUE) {
                    AddHeaderURL("signup=success");
                } else {
                    AddHeaderURL("signup=failed");
                }
            }

        }
    }


    // +---------------------------------------------------------+
    // | FUNCTIONS - Used to make other tasks in the code easier |
    // +---------------------------------------------------------+

    // Function that adds variables to the URL with the correct syntax
    function AddHeaderURL($urlToAdd) {
        global $urlFirstVar;
        global $headerURL;

        if($urlFirstVar) {
            $headerURL .= "?" . $urlToAdd;
            $urlFirstVar = false;
        } else {
            $headerURL .= "&" . $urlToAdd;
        }
    }


    // Header used to redirect the user to a specific URL
    if($redirectToURLAtTheEnd) {
        header("location: " . $headerURL);
        exit;
    }
?>