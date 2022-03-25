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
    else if(isset($_POST['register']))
    {
        $user->setLogin($_POST['login']);
        $user->setPassword(md5($_POST['password']));
        $user->setFirstname($_POST['firstname']);
        $user->setSurname($_POST['surname']);
        $user->setEmail($_POST['email']);
        $user->setPhone($_POST['phone']);
        if(count($user->getErrors()) == 0)
        {
            $user->registerUser();
            setcookie('login', $_POST['login'], time() + THIRTY_DAYS);
            setcookie('password', md5($_POST['password']), time() + THIRTY_DAYS);
        }
        else
            $user->printErrors();
    }
    else if(isset($_POST['login']))
    {
        $user->LoginUser($_POST['login'], md5($_POST['password']));
        setcookie('login', $_POST['login'], time() + THIRTY_DAYS);
        setcookie('password', md5($_POST['password']), time() + THIRTY_DAYS);
    }
    else if(isset($_COOKIE['login']))
        $user->LoginUser($_COOKIE['login'], $_COOKIE['password']);    
?>
