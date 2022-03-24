<?php
    if($user->getId() != NULL)
    {
        echo 'Привет, ' . $user->getFirstname() . ' ' .
            $user->getSurname();
?>
 <form method="POST">
  <input type="submit" name="unlogin" value="Выйти">
 </form>
<?php
    }
    else
    {
?>
 <form name="loginForm" method="POST">
  <input name="login" placeholder="Логин">
  </input>
  <br />
  <input name="password" type="password" placeholder="Пароль">
  </input>
  <br />
  <input type="submit" value="Войти">
 </form>
<?php
    }
?>
