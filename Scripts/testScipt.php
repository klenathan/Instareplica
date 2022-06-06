<?php
    // print_r(getimagesize("../data/userAvatar/default.png"));
    echo move_uploaded_file("data/userAvatar/default.jpg", "data/userAvatar/");
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
?>