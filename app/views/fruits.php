<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
</head>
<body>
    <?php foreach($data['fruits'] as $fruit): ?>
        <h1><?=$fruit->name?></h1> id: <?=$fruit->id?>
        <p><?=$fruit->color?></p>
        <p><?=$fruit->price?></p>
    <?php endforeach; ?>
</body>
</html>