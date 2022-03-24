<?php
    include 'classes/Login.php';

    $user = new Login();
    /* Выход из пользовательского аккаунта */
    if(isset($_POST['unlogin']))
    {
        /* Устанавливаем куки на 30 дней просроченными,
          чтобы они удалились */
        setcookie('login', '', time() - THIRTY_DAYS);
        setcookie('password', '', time() - THIRTY_DAYS);
        /* Убираем переменные логина */
        unset($_COOKIE['login']);
        unset($_COOKIE['password']);
        header('Refresh: 0');
    }
    else if(isset($_COOKIE['login']))
        $user->LoginUser($_COOKIE['login'], $_COOKIE['password']);
    else if(isset($_POST['login']))
    {
        $user->LoginUser($_POST['login'], $_POST['password']);
        setcookie('login', $_POST['login'], time() + THIRTY_DAYS);
        setcookie('password', $_POST['password'], time() + THIRTY_DAYS);
    }
?>
