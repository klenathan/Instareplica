<?php

    include("dataHandling.php");

    $userData = readData("../data/user.json");

    $userJsonData = json_decode($userData, true);

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userJsonData[$userName] = array(
        "username"=>$userName, 
        "email"=>$email,
        "password"=>$password
    );

    setcookie("user", $userName, time() + 86400, "/");

    writeData("../data/user.json", json_encode($userJsonData));
    header("Location: /");
?>