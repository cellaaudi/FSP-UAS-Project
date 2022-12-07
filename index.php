<?php
session_start();
if(!isset($_SESSION['user_login'])){
	header("location: login.php");
}
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
        <section>
            <div class="card">
                <div class="img">
                    <img src="https://i.pinimg.com/564x/aa/81/13/aa81136d4c3fe75fd31ae61e639bcedf.jpg" alt="">
                </div>
                <div class="card_action">
                    <div class="likes">
                        <img src="assets/icons/heart_outline.svg" alt="">
                        <span>200 likes</span>
                    </div>
                    <div class="comments">
                        <img src="assets/icons/comment_fill.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://i.pinimg.com/564x/ac/78/4a/ac784adfd60244a60e48ec3732ab147f.jpg" alt="">
                </div>
                <div class="card_action">
                    <div class="likes">
                        <img src="assets/icons/heart_outline.svg" alt="">
                        <span>200 likes</span>
                    </div>
                    <div class="comments">
                        <img src="assets/icons/comment_fill.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>