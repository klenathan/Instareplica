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
            <?php
            if(isset($_COOKIE["user"])){
                ?>
                <div class="upload-file">
                <form action="" method="post" enctype="multipart/form-data">
                    <img class="avatar" id="avatar"
                    src="<?php echo $userAvatarSrc?>" alt="avatar">
                    <textarea 
                        id="status" 
                        name="status" 
                        rows="2"
                        placeholder="What are you thinking, <?php echo $_COOKIE["user"]?>?"></textarea>
                    

                    <label id="uploadImgBtn" for="postImg">
                        <img src="assets/images/uploadIcon.png" alt="upload image">
                    </label>

                    
                    <input type="file" name="postImg" 
                    onchange="loadFile(event)"
                    id="postImg" accept="image/*"
                    required
                    />
                    
                    <input action="" type="submit" name="uploadPost"
                    value="Post"
                    id="uploadPost"/>

                </form>
                <img id="mainImg" alt="image">
                </div>
                <?php
            }
                ?>
            
            <div class="post-wrap">
                <?php
                    include_once("Scripts/posts.php")
                ?>
            </div>
        </div>
    </main>

    <footer>
    </footer>

    <script src="Scripts/JS/imgFileName.js"></script>
</body>
</html>
