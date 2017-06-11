

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form with php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
    <h1>PHP login example</h1>
    <div id="login">
        <h2>Login form</h2>
        <form action="login.php" method="post">
            <label>Username :</label>
            <input id="name" name="username" placeholder="username" type="text"><br/>
            <label>Password  :</label>
            <input id="password" name="password" placeholder="*******" type="password"><br/>
            <input name="submit" type="submit" value="login">


        </form>

    </div>

</div>


</body>
</html>