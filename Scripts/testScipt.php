<?php

include("dataHandling.php");

$userData = readData("../data/user.json");
$userJsonData = json_decode($userData, true);

$userName = "123123";
$password = "123pass";

foreach ($userJsonData as $k => $v) {
    echo $k." ";
    if ($userName == $k) {
        if($password == $v["password"]){
            setcookie("user", $userName, time() + 30 * 86400, "/");
            echo $k." ".$v["password"];
            echo "<br>";
        } else {
            // Wrong password
            echo $v["password"];
            echo "Wrongpass";
            echo "<br>";
        }
    } else {
        // username doesnot exist 
        echo $k;
        echo "Wrong username";
        echo "<br>";
    }
}

?>