<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет пользователя</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>
    
    <div class="feedback">
        <div class="container">
            
            <h2>Кабинет пользователя</h2>
            <p>Привет: <b><?= $_COOKIE['login'] ?></b></p>


            <form method="post" action="/profile.php">
            <button type="submit">Перейти в чат</button>
            
        </div>
    </div>

    
</body>

</html>