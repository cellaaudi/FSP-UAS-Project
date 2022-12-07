<?php
// session_start();
// if (isset($_GET['do'])) {
//     unset($_SESSION['user_login']);
//     session_destroy();
// } else if (isset($_SESSION['user_login'])) {
//     header("location: index.php");
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div id="container">
        <div id="wrapper">
            <div>LOG IN</div>
            <form action="" method="post" id="formLogin">
                <div class="login"><input type="text" placeholder="username" name="username"></div>
                <div class="login"><input type="password" placeholder="password" name="password"></div>
                <div class="login"><input type="submit" value="Login" name="login"></div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>