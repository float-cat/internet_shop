<?php
 if($user->getId()==NULL)
 {
?>
  <div>
   <form name="registration" method="POST">
    <input name="login" placeholder="Логин">
    </input>
    <br />
    <input name="password" type="password" placeholder="Пароль от 6 символов"
     pattern=".{6,}">
    </input>
    <br />
    <input name="firstname" placeholder="Имя">
    </input>
    <br />
    <input name="surname" placeholder="Фамилия">
    </input>
    <br />
    <input name="phone" placeholder="Телефон"
     pattern="\+7\s?[\(]{0,1}[0-9]{3}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
    </input>
    <br />
    <input name="email" placeholder="e-mail">
    </input>
    <br />
    <input name="register" type="submit" value="Зарегистрироваться">
    </input>
   </form>
  </div>
<?php
 }
 else
 {
?>
 <span>
  Вы уже зарегистрированы!
 </span>
<?php
 }
?>
