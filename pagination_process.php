<?php
require("class/meme.php");
$meme = new Meme();
$memes = $meme->getMemes();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 1;
}

$resPagination = $meme->pagination($p);

foreach ($resPagination as $arr) {
    echo '<div class="card">';
    echo '<div class="img">';
    echo '<img src="' . $arr["url_picture"] . '" alt="">';
    echo '</div>';
    echo '<div class="card_action">';
    echo '<div class="likes">';
    echo '<a href="" class="like"><img src="assets/icons/heart_outline.svg" alt=""></a>';
    echo '<span>&nbsp' . $arr["likes"] . ' likes</span>';
    echo '</div>';
    echo '<div class="comments">';
    echo '<img src="assets/icons/comment_fill.svg" alt="">';
    echo '</div></div></div>';
}

?>