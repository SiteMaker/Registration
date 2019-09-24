<?php
  require "db.php";
  $data = $_POST;
  if(isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if($user){
      // Логин существует
      if(password_verify($data['password'], $user->password)){
        // Все хорошо, логиним пользрвателя
        
      }else{
        $errors[] = 'Неверный пароль!';
      }
    }else{
      $errors[] = 'Пользователь с таким логином не найден!';
    }
  }

  if(!empty($errors)){
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
  }    
?>

<form action="login.php" method="POST">
  <p>
    <p><strong>Логин</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
  </p>
  <p>
    <p><strong>Пароль</strong>:</p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>">
  </p>
  <p>
    <button type="submit" name="do_login">Ввойти</button>
  </p>
</form>