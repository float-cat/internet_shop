<?php
/*******************************************
  Класс аутентифицирует и регистрирует
  пользователя
*******************************************/

/* Константа 30 дней в секундах */
define('THIRTY_DAYS', 2592000);

class Login
{
    private $errors = [];
    private $id;
    private $grouptype;
    private $login;
    private $password;
    private $firstname;
    private $surname;
    private $email;
    private $phone;

    function __construct()
    {
        $this->id = NULL;
    }

    public function LoginUser($login, $password)
    {
        /* Объект соединения с базой данных */
        global $mysqli;
        /* Экранируем параметры конструктора */
        $login = $mysqli->real_escape_string($login);
        $password = $mysqli->real_escape_string($password);
        /* Запрашиваем айди и группу из БД */
        $result = $mysqli->query(
            'SELECT id, grouptype, firstname, surname, email, phone
            FROM Users
            WHERE login = \'' . $login .
            '\' AND password = \'' . 
            $password .'\'');
        if(!$result)
        {
            echo 'Проблема с аутентификацией!';
            return;
        }
        else
        {
            /* Нам нужна только первая строка результата */
            $row = mysqli_fetch_row($result);
            if($row)
            {
                $this->id = $row[0];
                $this->grouptype = $row[1];
                $this->firstname = $row[2];
                $this->surname = $row[3];
                $this->email = $row[4];
                $this->phone = $row[5];
            }
            else
                /* Если нет строки результата - присваиваем нуль */
                $this->id = NULL;
        }
    }

    public function registerUser()
    {
        global $mysqli;
        $mysqli->query(
            'INSERT INTO Users (email, login, password, firstname,
            surname, grouptype, phone)
            VALUES (\'' . $this->email . '\', \'' . $this->login . '\', \'' .
            $this->password . '\', \'' . $this->firstname . '\', \'' .
            $this->surname . '\', \'User\', \'' . $this->phone . '\')');
        $result = $mysqli->query('SELECT MAX(id) FROM Users');
        if(!$result)
        {
            echo 'Проблема с аутентификацией!';
            return;
        }
        else
        {
            /* Нам нужна только первая строка результата */
            $row = mysqli_fetch_row($result);
            if($row)
                $this->id = $row[0];
            else
                /* Если нет строки результата - присваиваем нуль */
                $this->id = NULL;
        }
    }

    /* Методы для доступа к приватным полям */
    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getGroup()
    {
        return $this->grouptype;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setGroup($grouptype)
    {
        global $mysqli;
        $this->grouptype = $mysqli->real_escape_string($grouptype);
        if($this->grouptype == "")
            $this->errors[] = "Пустая группа";
    }

    public function setLogin($login)
    {
        global $mysqli;
        $this->login = $mysqli->real_escape_string($login);
        if($this->login == "")
            $this->errors[] = "Пустой логин";
    }

    public function setPassword($password)
    {
        global $mysqli;
        $this->password = $mysqli->real_escape_string($password);
        if($this->password == "")
            $this->errors[] = "Пустой пароль";
    }

    public function setFirstname($firstname)
    {
        global $mysqli;
        $this->firstname = $mysqli->real_escape_string($firstname);
    }

    public function setSurname($surname)
    {
        global $mysqli;
        $this->surname = $mysqli->real_escape_string($surname);
    }

    public function setEmail($email)
    {
        global $mysqli;
        $this->email = $mysqli->real_escape_string($email);
        if($this->email == "")
            $this->errors[] = "Пустой е-мейл адрес";
    }

    public function setPhone($phone)
    {
        global $mysqli;
        $this->phone = $mysqli->real_escape_string($phone);
        if($this->phone == "")
            $this->errors[] = "Пустой номер телефона";
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function printErrors()
    {
        foreach($this->errors as $err)
            echo $err . '<br />';
    }
}
?>
