<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/menu.php' ?>

    <?php if (empty($_GET['page'])) { ?>

    <?php require 'views/hlavni.php' ?>

    <?php } else { ?>

    <?php require 'views/o-mne.php' ?>

    <?php } ?>
</body>
</html>
