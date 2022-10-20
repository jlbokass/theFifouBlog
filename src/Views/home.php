<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1>Home</h1>
<p>Hi this ours articles</p>
<?php if ($articles): ?>
    <div>
        <?php foreach ($articles as $article): ?>
        <h3><?= $article['title'] ?></h3>
        <p><?= $article['content'] ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</body>
</html>