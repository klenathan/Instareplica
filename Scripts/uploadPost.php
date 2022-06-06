<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// }
    include_once("Scripts/dataHandling.php");

    $postData = readData("data/post.json");
    $postJsonData = json_decode($userData, true);

    $postId = uniqid();
    
    $imgPath = $_POST["path"];

?>