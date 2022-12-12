<?php
unset($_SESSION["user_login"]);
session_destroy();

echo "Logout Success";

// header('location: login.php');

?>