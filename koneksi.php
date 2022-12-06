<?php
    $database_host = "localhost";
    $database_user = "root";
    $database_pass = "";
    $database_name = "memefsp";
    
    try {
        $connect = mysqli_connect( $database_host ,$database_user,$database_pass, $database_name);
    } catch(Exception $e) {
        die("Kesalahan: " . $e->getMessage());
    }
?>