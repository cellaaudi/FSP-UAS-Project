<?php
require_once('parent.php');

class User extends Koneksi
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $status = "";

        $sql = "SELECT * FROM users WHERE username=? AND password=?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows > 0) {
            if ($row = $res->fetch_assoc()) {
                if ($password == $row['password']) {
                    $status = "Welcome";
                } else {
                    $status = "User not found";
                }
            }
        }

        return $status;
    }
}
