<?php
    function signUpUser() {
        include("dataHandling.php");

        $userData = readData("data/user.json");
        $userJsonData = json_decode($userData, true);

        $userName = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $userJsonData[$userName] = array(
            "username"=>$userName, 
            "email"=>$email,
            "password"=>$password
        );
        writeData("data/user.json", json_encode($userJsonData));

        // $regexPasswordCheck = " ^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"

        // Handle Image
        $target_dir = "data/userAvatar/";
        $target_file = $target_dir . $userName . ".jpg";
        $imageFile = "data/userAvatar/";

        if ($_FILES["avatar"]["name"] != "False"){
            $check = False;
        } else {
            $check = True;
            // $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        }

        if($check !== false) {
            // 
            echo (isset($_FILES["avatar"]["tmp_name"]));
            echo "file is an image";
            $imageFile = $_FILES["avatar"]["tmp_name"];
            move_uploaded_file($imageFile, $target_file);
        } else {
            $imageFile = "data/userAvatar/default.jpg";
            echo "File is not an image.";
            copy($imageFile, $target_file);
        }
        
        setcookie("user", $userName, time() + 86400, "/");
        header("Location: /");
    }
    
?>

