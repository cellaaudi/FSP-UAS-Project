<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header("location: login.php");
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
            <div class="out"><a href="index.php?do=logout" id="logout">Logout</a></div>
        </nav>
        <section id="memes"></section>
        <div class="pagination">
            <a href="" class="page"><<</a>
                <?php
                for ($i = 1; $i <= $meme->getTotalPage(); $i++) {
                ?>
                    <a href="" class="page"><?= $i ?></a>
                <?php
                }
                ?>
            <a href="index.php?p=<?= $meme->getTotalPage(); ?>" class="page">>></a>
        </div>
    </div>

    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>