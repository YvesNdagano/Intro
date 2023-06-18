<?php
session_start();
if(isset($_SESSION['Patient_id']))
{
    unset($SESSION['user_id']);
}

header("location:Login.php");
die;
?>