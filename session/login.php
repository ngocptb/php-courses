<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/9/2017
 * Time: 10:48 AM
 */
session_start();
$error = '';
if(isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error =" Username and password is require ";
    }
    else
    {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"login");
        $name = stripslashes($name);
        $pass = stripslashes($pass);
        $name = mysqli_real_escape_string($connect,$name);
        $pass = mysqli_real_escape_string($connect,$pass);
        $query = mysqli_query($connect,"select * from login WHERE username ='$name' and password ='$pass'");
        $row= mysqli_num_rows($query);
        if($row == 1)
        {
            $_SESSION['login_user']= $name;
        header("location : profile.php");
        }
        else
        {  echo"Username or password is invalid";}

    }
    mysqli_close($connect);
}
?>