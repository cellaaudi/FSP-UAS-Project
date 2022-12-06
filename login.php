<?php 
require_once("koneksi.php");

if(isset($_POST['login'])) {
    if(empty($_POST['username']) && empty($_POST['password'])) {
        echo '<script> alert("isilah username dan password anda!")</script>';
    } 
    else {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $sql ="SELECT * FROM users where username = '$username'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);
		$real_password = "";

		if ($real_password == $password){
			header("location:index.php");
			echo '<script>alert("Login berhasil!")</script>';
		}
		else{
			echo '<script>alert("Login gagal, username dan password tidak sesuai!")</script>';
		}


    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div id="container">
        <div id="wrapper">
            <div>LOG IN</div>
            <div class="login"><input type="text" placeholder="username"></div>
            <div class="login"><input type="password" placeholder="password"></div>
            <div class="login"><input type="submit" value="Login"></div>
        </div>
    </div>
</body>

</html>