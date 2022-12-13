<?php
require_once('parent.php');

class Memeuser extends Koneksi
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addLike($meme_id, $username, $liked)
    {
        $sql = "INSERT INTO meme_user (meme_id, username, liked) VALUES (?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("iss", $meme_id, $username, $liked);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $arr = ['result' => 'success', 'id' => $this->con->insert_id];
        } else {
            $arr = ['result' => 'failed', 'error' => $this->con->error];
        }
    }

    public function readLike($meme_id, $username)
    {
        $sql = "SELECT * FROM meme_user WHERE meme_id=? AND username=?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('is', $meme_id, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        $arr = [];
        $data = [];

        if ($result->num_rows > 0) {
            while ($r = mysqli_fetch_assoc($result)) {
                array_push($data, $r);
            }

            $arr = ["result" => "success", "data" => $data];
        } else {
            $arr = ["result" => "error", "message" => "SQL error: $sql"];
        }

        return $arr;
    }
}
