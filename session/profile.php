<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 6/9/2017
 * Time: 10:48 AM
 */
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="profile">
     <b id="welcome">Welcome :<i><?php echo $login_session ;?></i></b>
     <b id="logout"><a href="logout.php">Log out</a></b>

    </div>

</div>


</body>
</html>
