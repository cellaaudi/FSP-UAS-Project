<?php
session_start();

if (isset($_SESSION['user_login'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Memes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div id="container">
        <div id="title"><b>LOG IN</b></div>
        <div id="wrapper">
            <form action="" method="post" id="formLogin">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login" name="login">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>