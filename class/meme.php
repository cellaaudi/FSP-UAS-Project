<?php
require_once('parent.php');

class Meme extends Koneksi
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMemes()
    {
        $memes = [];

        $sql = "SELECT * FROM memes";
        $res = $this->con->query($sql);

        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $id = $row['id'];
                $url = $row['url_picture'];
                $likes = $row['likes'];
    
                $memes[] = array("id" => $id, "url" => $url, "likes" => $likes);
            }
        }

        return $memes;
    }
}
