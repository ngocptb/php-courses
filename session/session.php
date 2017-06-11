<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/9/2017
 * Time: 10:48 AM
 */
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"login");
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query("select username from login WHERE username = $user_check ");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if(!isset($login_session))
{
    mysqli_close($connect);
    header('location : index.php');
}
?>