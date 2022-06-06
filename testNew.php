<?php
include("./scripts/testScipt.php");
echo "<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "status".$_FILES["avatar"]["name"];
}
?>



<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="avatar" id="avatar">
    <input type="submit" value="ok">
</form>