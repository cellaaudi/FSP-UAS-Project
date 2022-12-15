<?php
$username = $_POST['username'];
$meme_id = $_POST['meme_id'];

require_once('../class/memeuser.php');
require_once('../class/meme.php');

$meme_user = new Memeuser();
$meme = new Meme();

$arr = $meme_user->readLike($meme_id, $username);

if ($arr['result'] == 'error') {
   $add = $meme_user->addLike($meme_id, $username, 'Yes');

   if ($add['result'] == 'success') {
      $detail = $meme->getMemesbyID($meme_id);

      $viewBefore = $detail[0]['likes'];
      $viewNow = $viewBefore + 1;

      $meme_user->updateLike($meme_id, $viewNow);

      echo "updated";
   }
}
