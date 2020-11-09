<!DOCTYPE html>
<html>
    <head>
        <title><?= $title.' | My first blog' ?></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./public/css/main.css"/>
        <script src="./public/js/main.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <base href="/">
    </head>
    <body>
        <?php require('./view/components/header.php'); ?>
        <?= $content ?>
    </body>
</html>