<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h1>Add</h1>
<form method="post">
    <div>
        <label for="u-title">Title</label>
        <input type="text" name="u-title">
    </div>
    <div>
        <label for="u-content">Content</label>
        <textarea name="u-content" id="u-content" rows="10"></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html>