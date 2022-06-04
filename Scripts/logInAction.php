<?php

    include("dataHandling.php");

    $userData = readData("../data/user.json");
    $userJsonData = json_decode($userData, true);

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userJsonData[$userName] = array(
        "username"=>$userName,
        "password"=>$password
    );

    foreach ($userJsonData as $k => $v) {
        if ($userName === $k) {
            if($password === $v["password"]){
                setcookie("user", $userName, time() + 30 * 86400, "/");
                header("Location: /");
            } else {
                // Wrong password
                
            }
        } else {
            // username doesnot exist 
        }
    }
?>