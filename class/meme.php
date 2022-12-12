<?php
require_once('parent.php');

class Meme extends Koneksi
{
    public $perpage = 12;

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

    public function getTotalData()
    {
        $memes = $this->getMemes();
        return count($memes);
    }

    public function getTotalPage()
    {
        return ceil($this->getTotalData() / $this->perpage);
    }

    public function pagination($p)
    {
        $start = ($p - 1) * $this->perpage;
        
        $sql = "SELECT * FROM memes LIMIT ?, ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ii', $start, $this->perpage);
        $stmt->execute();
        $res = $stmt->get_result();

        return $res;
    }
}
