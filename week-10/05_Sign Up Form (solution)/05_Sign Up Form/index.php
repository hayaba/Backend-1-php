<?php
    // Create a connection to the MySQL Server
    include("mysql.php");
    // Include all the custom classes created
    include("classes.php");

    // Declaring and assigning values to error variables
    $nameError = "";
    $profileError = "";
    if(isset($_GET['displayname'])) {
        $nameError = $_GET['displayname'];
    }
    if(isset($_GET['profile'])) {
        $profileError = $_GET['profile'];
    }
?>

<center>
    <form action="backend.php" method="post">
        * Display Name: <?php if($nameError == "error") { echo "<b>Must not be empty</b>";} ?><br>
        <input type="text" name="displayname"><br><br>

        * Profile Text: <?php if($profileError == "error") { echo "<b>Must not be empty</b>";} ?><br>
        <input type="text" name="profile"><br><br>

        <input type="submit" value="Create user">
        <input type="hidden" name="action" value="signup">
    </form>

    <?php
        // Checks if the GET variable signup exists
        if(isset($_GET['signup'])) {
            $signup = $_GET['signup'];

            // Outputs information to the user
            if($signup == "success") {
                echo "New user has been created";
            }
            if($signup == "failed") {
                echo "Something went wrong, please try again";
            }
            echo "<br>";
        }
    ?>

    <br>

    <table border="1" cellspacing="0" cellpadding="3" style="text-align: center;">
        <tr>
            <th width="150">Display Name</th>
            <th width="300">Profile Text</th>
            <th width="400">Description</th>
        </tr>

        <?php
            // Type in the SQL command (SELECT) you want to do
            $sql = "SELECT * FROM userprofile ORDER BY id DESC LIMIT 10";
            // Do the query call to the MySQL server, and save the returned result
            $result = $mySQL->query($sql);

            // fetch_object() gets the next row from the sql result, as an object. If there are no more rows, it returns null.
            while($row = $result->fetch_object("User")) {
                ?>
                    <tr>
                        <td width="150"><?php echo $row->display_name; ?></td>
                        <td width="300"><?php echo $row->profile_text; ?></td>
                        <td width="400"><?php echo $row->InformationCard(); ?></td>
                    </tr>
                <?php
            }
        ?>
    </div>
</center>

