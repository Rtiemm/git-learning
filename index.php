<?php
session_start();
if ($_SESSION['user']) {
header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!-- Форма авторизации -->
<form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <label>
        <input type="text" name="login" placeholder="Введите свой логин">
    </label>
    <label>Пароль</label>
    <label>
        <input type="password" name="password" placeholder="Введите пароль">
    </label>
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>