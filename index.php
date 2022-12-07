<?php
// session_start();
// if(!isset($_SESSION['user_login'])){
// 	header("location: login.php");
// }

require("class/meme.php");
$meme = new Meme();
$resmemes = $meme->getMemes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="container">
        <section id="memes">
            <?php
            foreach ($resmemes as $arr) {

            ?>
                <div class="card">
                    <div class="img">
                        <img src="<?= $arr['url'] ?>" alt="">
                    </div>
                    <div class="card_action">
                        <div class="likes">
                            <img src="assets/icons/heart_outline.svg" alt="">
                            <span><?= $arr['likes'] ?> likes</span>
                        </div>
                        <div class="comments">
                            <img src="assets/icons/comment_fill.svg" alt="">
                        </div>
                    </div>
                </div>

            <?php
            }

            ?>
        </section>
    </div>
</body>

</html>