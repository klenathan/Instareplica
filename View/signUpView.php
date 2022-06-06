<?php
    include("Scripts/signUpAction.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        signUpUser();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="../assets/CSS/style.css">
    <link rel="stylesheet" href="../assets/CSS/signup.css">

    <link rel="icon" href="/assets/images/favicon.JPG">

</head>
<body>

    <main>
        <div class="signup-img-wrap">
            <a href="/">Meowstagram</a>
        </div>

        <div class="form-wrap">
        <!-- ../Scripts/signUpAction.php -->
            <form class="log-form" action="" method="post" enctype="multipart/form-data">
                <h1>Sign Up</h1>

                <p>
                    <input class="input-field" 
                    placeholder="Username" 
                    type="text" 
                    name="username"
                    pattern="[a-z0-9._]+"
                    title='Username should only contain lowercase letters, numbers and ". _". e.g. johndoo123'
                    required>
                </p> 
                <p>
                    <input class="input-field" 
                    placeholder="E-mail" 
                    type="text" 
                    name="email" 
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    required>
                </p>
                <p>
                    <input 
                    class="input-field" 
                    placeholder="Password" 
                    type="password" 
                    name="password" 
                    id="password" 
                    pattern="(?=.*[a-z])+(?=.*[A-Z])+(?=.*[0-9])+(?=.*[^A-Za-z0-9])+(?=.{8,})"
                    required>
                </p>

                <div class="password-check-wrap">
                    <h2 class="password-check" id="lowercasePassed">Lowercase character</h2>
                    <h2 class="password-check" id="uppercasePassed">Uppercase character</h2>
                    <h2 class="password-check" id="numberPassed">Number</h2>
                    <h2 class="password-check" id="specialCharPassed">Special character</h2>
                    <h2 class="password-check" id="lengthPassed">At least 8 characters</h2>
                </div>
                <p>
                    <input 
                    class="input-field" 
                    placeholder="Re-type Password" 
                    type="password"
                    id="retype_password" 
                    required>
                </p>
                <div id="avatarInputWrap" class="input-field">
                    <label for="avatar">Upload avatar</label>
                    <input type="file"
                            id="avatar" name="avatar"
                            accept="image/png, image/jpeg, image/jpg">
                </div>
                <input class="submit-btn"  type="submit" value="Sign Up">
            </form>
        </div>

        <script src="Scripts/JS/passwordValidate.js"></script>
        
    </main>
</body>

</html>