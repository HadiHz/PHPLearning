<?php
include "functions.php";
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php foreach ($users as $user):
    $template = "Hello Dear #name#. {email}"; ?>

    <?php //$template = str_replace('#name#',$user['name'] , $template);
    $template = str_replace(array('#name#', '{email}'), array($user['name'], $user['email']), $template);

    ?>
    <p> <?php echo $template; ?></p>

<?php endforeach; ?>

</body>
</html>