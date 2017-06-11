<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/8/2017
 * Time: 9:55 AM
 */
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"video");
if(!$conn)
    echo "error";
else
    echo "Connect successfull";

?>