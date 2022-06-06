<?php

    if (isset($_COOKIE["user"])) {
        $userAvatarSrc = "data/userAvatar/" . $_COOKIE["user"] . ".jpg";
    }
    include_once("Scripts/uploadPost.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        uploadPost();
        header("Location: /");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test site</title>

    <link rel="stylesheet" href="/assets/CSS/style.css">
    <link rel="stylesheet" href="/assets/CSS/home.css">
    <link rel="stylesheet" href="/assets/CSS/post.css">
    <link rel="stylesheet" href="/assets/CSS/profile.css">

    <link rel="icon" href="/assets/images/favicon.JPG">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />

</head>
<body>
    <header>
        <?php
        include_once("header.php");
        ?>
    </header>

    <main>
        
        <div class="content-wrap">
            <div class="profileInfoWrap">
                <div class="profileInfo">
                    <img src="data/userAvatar/<?php echo $_GET["u"]?>.jpg" 
                    class="profileAvatar"
                    alt="<?php echo $_GET["u"]?>'s avatar">
                    <p class="profileUsername"><?php echo $_GET["u"]?></p>
                </div>
            </div>
             
            
            <div class="user-post-wrap">
                <?php
                    include_once("Scripts/profileFeed.php")
                ?>
            </div>
        </div>
    </main>

    <footer>
    </footer>

    <script src="Scripts/JS/imgFileName.js"></script>
</body>
</html>
