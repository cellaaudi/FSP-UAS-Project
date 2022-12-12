<?php
session_start();

if(!isset($_SESSION['user_login'])){
	header("location: login.php");
}

if(isset($_GET['do'])){
    if($_GET['do']=="logout"){
        unset($_SESSION["user_login"]);
        session_destroy();

        header('location: login.php');
    }
}

$username = $_SESSION['user_login'];


require("class/meme.php");
$meme = new Meme();
$resmemes = $meme->getMemes();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 1;
}

$resPagination = $meme->pagination($p);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div id="container">
        <nav>
            <div class="hi">Hi, <?= $username ?></div>
            <div class="out"><a href="" id="logout">Logout</a></div>
        </nav>
        <section id="memes">
            <?php
            foreach ($resPagination as $arr) {

            ?>
                <div class="card">
                    <div class="img">
                        <img src="<?= $arr['url_picture'] ?>" alt="">
                    </div>
                    <div class="card_action">
                        <div class="likes">
                            <a href="" class="like"><img src="assets/icons/heart_outline.svg" alt=""></a>
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
        <div class="pagination">
            <a href="index.php?p=1" class="page"><<</a>
            <?php
                for ($i = 1; $i <= $meme->getTotalPage(); $i++) {
                    ?>
                        <a href="index.php?p=<?= $i ?>" class="page <?php if ($i == $p) echo "active"; ?>"><?= $i ?></a>
                    <?php
                }
            ?>
            <a href="index.php?p=<?= $meme->getTotalPage(); ?>" class="page">>></a>
        </div>
    </div>
</body>

</html>