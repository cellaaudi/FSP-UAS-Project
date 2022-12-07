<?php
session_start();
if (isset($_GET['do'])) {
    unset($_SESSION['user_login']);
    session_destroy();
} elseif (isset($_SESSION['user_login'])) {
    header("location: index.php");
}
// if (isset($_POST['login'])) {}
// require("class/user.php");

// require_once("koneksi.php");

// if (isset($_POST['login'])) {
//     if (empty($_POST['username']) && empty($_POST['password'])) {
//         echo '<script> alert("isilah username dan password anda!")</script>';
//     } else {
//         $username = mysqli_real_escape_string($connect, $_POST['username']);
//         $password = mysqli_real_escape_string($connect, $_POST['password']);

//         $sql = "SELECT * FROM users where username = '$username'";
//         $result = mysqli_query($connect, $sql);
//         $row = mysqli_fetch_array($result);
//         $real_password = "";

//         if ($real_password == $password) {
//             header("location:index.php");
//             echo '<script>alert("Login berhasil!")</script>';
//         } else {
//             echo '<script>alert("Login gagal, username dan password tidak sesuai!")</script>';
//         }
//     }
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

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>