<?php
require_once('parent.php');

class Like extends Koneksi
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMemes()
    {
        if ($_REQUEST['postId']) {
            $userip = $_SERVER['REMOTE_ADDR'];

            // mysql_query("UPDATE meme_user set liked=liked+1 where post_id= " . $_REQUEST['postId']);

            // mysql_query("INSERT INTO facebook_ip (userip,post_id) VALUES('" . $userip . "','" . $_REQUEST['postId'] . "')");

            // $total_likes = mysql_query("SELECT * FROM facebook_likes where post_id = " . $_REQUEST['postId'] . " ");
            // $likes = mysql_fetch_array($total_likes);
            // $likes = $likes['likes'];
        }
        // echo $likes;
    }
}
