<?php
session_start();
include("connect.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Page</title>
    <link rel="stylesheet" href="../styles/user_menu.css">
</head>
<body style="text-align:center;">
    <?php
        // Resume the session started by the verifyUserDetails() function and reclaim the Patient_name
        $Patient_name = $_SESSION['Patient_name'];
    ?>
    <header class="page-header">
         <!--Displaying the username on the page-->
        <span style="margin-left:50%; align=right;" id="welcome-username">Welcome, <?php echo $Patient_name; ?></span>
        <h1>Patient Menu</h1>
       
    </header>
    <hr>
</body>
</html>