<?php
$username = $_POST['username'];
$password = $_POST['password'];

require("class/user.php");
$user = new User();
$status = $user->login($username, $password);

echo $status;

?>