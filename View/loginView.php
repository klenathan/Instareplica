<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="/assets/CSS/style.css">
    <link rel="stylesheet" href="/assets/CSS/login.css">
    <link rel="icon" href="/assets/images/favicon.JPG">
</head>
<body>
    <!-- <header>
        <?php
        include("header.php");
        ?>
    </header> -->

    <main>
        <div class="login-img-wrap">
            <a href="/">Meowstagram</a>
        </div>
        <div class="form-wrap">

            <form class="log-form" action= <?php echo $_SERVER['PHP_SELF'];?> method="post">
                <h1>Login</h1>
                <p id="login-result">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $accountFound = False;
                        $passwordMatch = False;
                        include("./Scripts/dataHandling.php");

                        $userData = readData("./data/user.json");
                        $userJsonData = json_decode($userData, true);

                        $userName = $_POST["username"];
                        $password = $_POST["password"];
                        

                        foreach ($userJsonData as $k => $v) {
                            if ($userName == $k) {
                                $accountFound = True;
                                if($password == $v["password"]){
                                    setcookie("user", $userName, time() + 30 * 86400, "/");
                                    header("Location: /");
                                    $passwordMatch = True;
                                }
                            }
                        }
                        if ($accountFound == False) {
                            echo "Account does not exist";
                        } elseif ($passwordMatch == False) {
                            echo "Wrong password";
                        }
                    }
                    ?>
                </p>
                <p>
                    <input 
                    placeholder="Username" 
                    class="input-field" 
                    type="text" 
                    name="username"
                    required>
                </p>
                <p>
                    <input 
                    placeholder="Password" 
                    class="input-field" 
                    type="password" 
                    name="password"
                    required>
                </p>
                <div id="login_signup_container">
                    <input class="submit-btn" type="submit" value="Login">
                    <p>
                    Don't have an account?
                    </p>
                    <a id="sign_up_btn" href="/signup.php">Create new account</a>
                </div>
                
            </form>
        </div>
        
    </main>
</body>

</html>