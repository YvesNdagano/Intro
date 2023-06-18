<?php
session_start();
include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
   $Patient_email= $_POST['email'];
   $Patient_password=$_POST['password'];
if(!empty($Patient_email)&& !empty($Patient_password))
 {
    //read from database
    $query="select * from Patient where Patient_email = '$Patient_email' limit 1";
    $result= mysqli_query($conn,$query);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data=mysqli_fetch_assoc($result);
            
            if($user_data['Patient_password'] === $Patient_password)
            {
                //$_SESSION['Patient_id'] = $user_data['Patient_id'];
                header("location: index.php");
                die;
            }
        }
    }
    echo "Wrong Email adress or Password. Try again!!";
 }
 else
 {
    echo "Wrong Email adress or Password. Try again!!";
 }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                    <div style="front-size:20px;margin:10px;color:white;">Login</div>

                    Email:<input id="text" type="text" name="email"><br><br>
                    Passowrd:<input id="text" type="password" name="password"><br><br>

                    <input id="boutton" type="submit" value="Login"><br>
                    <a href="Signup.php">Create New account</a>
                </form>
            </div>
        </body>
    </head>