<?php
$con = new mysqli("localhost", "root", "", "fsp-uas");

if ($con->connect_errno) {
    die("Connection Failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=? AND password=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows > 0) {
    if ($row = $res->fetch_assoc()) {
        if ($password == $row['password']) {
            echo "Welcome";
        } else {
            echo "User not found";
        }
    }
}

?>