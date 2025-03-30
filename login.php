<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Chater - Вход</title>
</head>
<body>
    
<div class="wrapper">

    
    <title>Вход в Chater</title>
   


   </head>
   
   <body>
   <?php require_once "blocks/header.php"; ?>
   
       <div class="feedback">
           <div class="container">
               <h2>Вход</h2>
               <p>Авторизация прошла успешно!</p>
               
               <form method="post" action="/lib/auth.php">
                   <div class="inline">
                    
                   <input type="text" placeholder="Логин" name="login">
                   <input type="password" placeholder="Пароль" name="password">
                   
   
                   <button type="submit">Войти</button>
               </form>
           </div>
       </div>
        
    </form>

    <div class="warn success display-none">
        Вы успешно вошли
    </div>

    <div class="warn error display-none">
        Проверьте данные!
    </div>

    <div class="warn fatalerror display-none">
        Произошла какая-то ошибка!
    </div>

</div>


<head>
    
    
</body>

</html>

</body>
</html>

</html>
