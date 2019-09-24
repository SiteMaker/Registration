<?php
  require "db.php";
?>

<form action="/signup.php" method="POST">
  <p>
    <p><strong>Ваш логин</strong>:</p>
    <input type="text" name="login">
  </p>
  <p>
    <p><strong>Ваш Email</strong>:</p>
    <input type="email" name="email">
  </p>
  <p>
    <p><strong>Ваш пароль</strong>:</p>
    <input type="password" name="password">
  </p>
  <p>
    <p><strong>Введите пароль еще раз</strong>:</p>
    <input type="password" name="password_2">
  </p>
  <p>
    <button type="submit">Зарегистрироваться</button>
  </p>
</form>