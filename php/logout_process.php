<?php
session_start();

unset($_SESSION["user_login"]);
session_destroy();

echo "Logout Success";

?>