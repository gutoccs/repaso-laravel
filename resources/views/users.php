<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Listado de Usuarios - Repaso Laravel</title>
</head>
<body>
    <h1><?= e($title); ?></h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= e($user); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>