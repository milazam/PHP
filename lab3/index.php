<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Форма регистрации</title>
</head>
<body>
    <?php
        if($_COOKIE['user'] == ''):
    ?>
<div class ="row">
    <div class = "col">
        <h1>Форма регистрации</h1>
<form action="check.php" method="post">
<input type="text" name="login" placeholder="Введите логин"><br>
<input type="text" name="name" placeholder="Введите имя"><br>
<input type="text" name="password" placeholder="Введите пароль"><br>
<button>Зарегистрироваться</button>
</form>
    </div>
    <div class = "col">
        <h1>Форма авторизации</h1>
<form action="auth.php" method="post">
<input type="text" name="login" placeholder="Введите логин"><br>
<input type="text" name="password" placeholder="Введите пароль"><br>
<button>Авторизоваться</button>
</form>
    </div>
    <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href ="/exit.php">здесь</a>.</p>
    <?php endif; ?>
</div>
</body>
</html>