<?php
    function signOut(){
        setcookie("user", null, -1 , "/");
        header("Location: /");
    }
?>

<div class="header">
    <div id="header_logo">
        <a href="/">Meowstagram</a>
    </div>

    <div id="search_bar">
        <p>&nbsp;</p>
        <input 
        type="search" 
        name="searchBar" 
        id="main_search_bar"
        placeholder="Search...">
    </div>
    
    <div id="user_info">
        <?php
        if(isset($_COOKIE["user"])){
            echo '
            <a href="../Scripts/signOut.php">SIGN OUT</a>
            <p>'.$_COOKIE["user"].'</p>
            <img 
                src="/data/userAvatar/'.$_COOKIE["user"].'.jpg"
                alt="avatar"
                id="avatar">
            ';
        } else {
            echo '
            <a href="signup.php">Sign Up</a>
            
            <a href="login.php">Login</a>
            ';
        }
        ?>
        
    </div>
</div>