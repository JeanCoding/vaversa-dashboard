<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="Uses" id="User">
        <input type="password" name="Password" id=Password> 
        <input type="submit" value="Login" name="Login">
        <input type="submit" value="Register" name="Register">
    </form>
</body>
</html>
<?php

if (isset($_POST["Register"]))
{
    header('location: Register.php');
}

?>