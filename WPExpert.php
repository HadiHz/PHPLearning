<?php
include "functions.php";

if(isset($_POST['send'])){
    var_dump($_POST);
    echo "helloooooooooo";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>

    <?php if(is_user_logged_in()): ?>
        <p>welcome</p>
    <?php else: ?>
        <a href="#">login</a>
    <?php endif; ?>

    <form action="" method="post">
        <input type="radio" name="background" value="red">RED
        <input type="radio" name="background" value="blue">GEEEN
        <input type="radio" name="background" value="green">BLUE

        <input type="submit" name="send" value="Send">
    </form>
</body>
</html>
