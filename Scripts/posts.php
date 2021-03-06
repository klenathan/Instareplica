<?php
    include_once("Scripts/dataHandling.php");

    $postData = readData("data/post.json");
    $postJsonData = json_decode($postData, true);

    if (is_array($postJsonData)){
        foreach ($postJsonData as $key => $value) {
            ?>

            <div class="posts">

                <div class="postInfo">
                    <div class="userInfo">
                        <img src="data/userAvatar/<?php echo $value["author"]?>.jpg" 
                        class="postAvatar"
                        alt="<?php echo $value["author"]?>'s avatar">
                        <a href="/u.php?u=<?php echo $value["author"];?>" 
                        class="headerAvatarWrap">
                            <p class="author-name"><?php echo $value["author"]?></p>
                        </a>
                    </div>

                    <?php
                        if ($_COOKIE['user'] == $value["author"]){
                            ?>
                    <div class="postOpen">
                        <p>Delete</p>
                    </div>
                        <?php
                        }
                    ?>
                    <div class="postOpen">
                        <p><?php echo $value["visible"] ?></p>
                    </div>
                </div>

                <div class="post-content-wrap">
                    <div class="statusField">
                        <p><?php echo $value["status"] ?></p>
                    </div>
                    <img 
                    class="postImg"
                    src="<?php echo $value["imgPath"]?>" 
                    alt="<?php echo $value["author"]?>'s post">
                    <p class="statusTime"><?php echo timeDifferent($value["time"])?> ago</p>
                </div>

            </div>
            <?php
        }
    }
    
?>

<?php
function timeDifferent($strTime) {
    $time = intval($strTime);
    $deltaTime =  time() - $time;
    if ($deltaTime < 60) {
        return $deltaTime." seconds";
    } elseif ($deltaTime < 3600) {
        return floor($deltaTime / 60)." mins";
    } elseif ($deltaTime < 86400) {
        return floor($deltaTime / 60 / 60)." hrs";
    } else {
        return floor($deltaTime / 24 / 60 / 60)." days";
    }
}
?>

<script>
    function addLike(postId){
        const file = await fetch("data/post.json");
        const postJsonData = await file.json();

        postJsonData[postId]["like"] += 1;


    }
</script>