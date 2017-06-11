<?php
/**
 * Created by me.
 * User: asus
 * Date: 6/8/2017
 * Time: 9:54 AM
 */
include "connect.php";
$name = $_POST['name'];
$id =$_POST['id'];
$city= $_POST['city'];
echo $name." ".$id." ".$city."<br/>";
$result = mysqli_query($conn,"insert into student(name,id,address) values('$name','$id','$city')");

echo $name. "'s data is added";
?>