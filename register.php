<?php 
session_start();

if($_SESSION['user']){
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
     <!-- Reg -->

     <form action="/vendor/signup.php" method="post" enctype="multipart/form-data">
     <label>ФИО</label>
     <input type="text"name="full_name" placeholder="Введите свое полное имя">
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Изображение профиля</label>
    <input type="file" name="avatar">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Sign</button>
     <p>
        У вас есть аккаунт? -  <a href="/index.php">Авторизируйтесь</a>!
     </p>
      <?php
      if($_SESSION['message']){
        echo '<p class="msg">' . $_SESSION['message']. '</p>';
      }
        unset($_SESSION['message']);
        ?>

     </form>
</body>
</html>