<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test site</title>

    <link rel="stylesheet" href="/assets/CSS/style.css">
    <link rel="icon" href="/assets/images/favicon.JPG">
</head>
<body>
    <header>
        <?php
        include_once("header.php");
        ?>
    </header>

    <main>
        <h1>
            <?php
            if(isset($_COOKIE["user"])){
                echo "Welcome ".$_COOKIE["user"];
            } else {
                echo "Please Log In";
            }
            ?>
        </h1>
    </main>

    <footer>
    </footer>
</body>
</html>
