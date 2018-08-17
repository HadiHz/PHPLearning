<?php
include "functions.php";
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php for ($i = 0; $i < count($users); $i++): $user = $users[$i] ?>
    <p><?php echo $i; ?></p>
<?php endfor; ?>

<?php //table>tr>td*4 and after that tab ?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>actions</th>
    </tr>

    <?php if ($users && count($users) > 0): ?>
        <?php foreach ($users as $user): ?>

            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href="#">delete</a>
                    <a href="#">edit</a>
                    <a href="#">approve</a>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">
                <span>nothing found.</span>
            </td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>