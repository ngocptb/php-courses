<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/8/2017
 * Time: 11:04 AM
 */
include "connect.php";
$id = $_POST['s_id'];
echo $id;
$dis = mysqli_query($conn,"SELECT id, name , address FROM student where id = '$id' ");
//$result = mysqli_fetch_array($dis,MYSQLI_ASSOC);
while($result = mysqli_fetch_array($dis,MYSQLI_ASSOC))
{
    echo "<br/> Student id : ".$result['id'];
    echo "<br/> Student name : ".$result['name'];
    echo "<br/> Student city : ".$result['address'];
}
?>