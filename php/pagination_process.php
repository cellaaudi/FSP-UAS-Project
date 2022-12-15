<?php
require("../class/meme.php");
require("../class/memeuser.php");

$meme = new Meme();
$memes = $meme->getMemes();

$memeuser = new Memeuser();

$p = 0;
$get_p = $_GET['p'];

if (isset($get_p)) {
    if ($get_p == '&lt;&lt;') {
        $p = 1;
    } else if ($get_p == '&gt;&gt;') {
        $p = $meme->getTotalPage();
    } else {
        $p = $get_p;
    }
} else {
    $p = 1;
}

$resPagination = $meme->pagination($p);

foreach ($resPagination as $arr) {
        echo '<div class="card" id="' . $arr["id"] . '">';
        echo '<div class="img">';
        echo '<img src="' . $arr["url_picture"] . '" alt="">';
        echo '</div>';
        echo '<div class="card_action">';
        echo '<div class="likes">';
        $arr2 = $memeuser->readLike($arr['id'], $_GET['username']);
        if ($arr2['result'] == 'error') {
            echo '<a href="" class="like">';
            echo '<img src="assets/icons/heart_outline.svg" alt="" class="heart">';
        } else if ($arr2['result'] == 'success') {
            echo '<a href="" class="like disable">';
            echo '<img src="assets/icons/heart_fill.svg" alt="" class="heart">';
        }
        echo '</a>';
        echo '<span>&nbsp' . $arr["likes"] . ' likes</span>';
        echo '</div>';
        echo '<div class="comments">';
        echo '<img src="assets/icons/comment_fill.svg" alt="">';
        echo '</div></div></div>';
}
