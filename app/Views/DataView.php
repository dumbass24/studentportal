<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <h1> subject </h1>
<ul>
    <?php foreach($subject as $s):?>
        <li> <?= $s['subject'] ?></li>
    
    <?php endforeach; ?>
</ul>
</body>
</html>