<?php
session_start();
include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
   $Patient_name = $_POST['name'];
   $Patient_email= $_POST['email'];
   $Patient_gender= $_POST['gender'];
   $Patient_Birth= $_POST['DoB'];
   $Patient_number= $_POST['number'];
   $Patient_password=$_POST['password'];
if(!empty($Patient_name) && !empty($Patient_email)&& !empty($Patient_gender)&& !empty($Patient_Birth)&& !empty($Patient_number)&& 
!empty($Patient_password))
 {
    //save to database
    $Patient_id= random_num(15);

    $query="insert into Patient(Patient_id,Patient_name,Patient_email,Patient_gender,Patient_Birth,Patient_number,Patient_password) 
    values('$Patient_id','$Patient_name','$Patient_email','$Patient_gender','$Patient_Birth','$Patient_number','$Patient_password')";

    mysqli_query($conn,$query);

    header("location:Login.php");
    die;
 }
 else
 {
    echo "Please complete your Form!!";
 }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <body>
            <style type="text/css">
                #text{
                    height: 25px;
                    border-radius: 5px;
                    padding: 4px;
                    border: solid thin #aaa;
                    width:60%;
                }
                #boutton{
                    padding: 10px;
                    width: 100px;
                    color: white;
                    background-color: lightblue;
                    border:none;
                }
                #box{
                    background-color:grey;
                    margin:auto;
                    width: 300px;
                    padding: 20px;
                }
            </style>
            <div id="box">
                <form method="post">
                    <div style="front-size:20px;margin:10px;color:white;">Create your Account</div>

                    Name: <input id="text" type="text" name="name"><br><br>
                    Email: <input id="text" type="text" name="email"><br><br>
                    Gender:<input id="text" type="text" name="gender"><br><br>
                    Date of Birth:<input id="text" type="date" name="DoB"><br><br>
                    Phone Number:<input id="text" type="text" name="number"><br><br>
                    Password: <input id="text" type="password" name="password"><br><br>
                    <input id="boutton" type="submit" value="Submit"><br>
                    <a href="Login.php">Click here to signup</a>
                </form>
            </div>
        </body>
    </head>