<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/9/2017
 * Time: 10:48 AM
 */
session_start();
if(session_destroy())
{
    header('location: index.php');
}
?>