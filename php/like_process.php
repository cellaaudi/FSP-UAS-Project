<?php
$username = $_POST['username'];
$meme_id = $_POST['meme_id'];

 require_once('../class/memeuser.php');

 $meme_user = new Memeuser();

 $arr = $meme_user->readLike($meme_id, $username);

 if($arr['result'] == 'error') {
    // echo 'error';
    $meme_user->addLike($meme_id, $username, 'Yes');
 }
?>