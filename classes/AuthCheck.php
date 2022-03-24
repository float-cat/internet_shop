<?php
/*******************************************
  Класс проверяет аутентификацию
  пользователя для запросов
*******************************************/

class AuthCheck
{
    private $id;
    private $group;

    function __construct($login, $password)
    {
        /* Объект соединения с базой данных */
        global $mysqli;
        /* Экранируем параметры конструктора */
        $login = $mysqli->real_escape_string($login);
        $password = $mysqli->real_escape_string($password);
        /* Запрашиваем айди и группу из БД */
        $result = $mysqli->query(
            'SELECT id, grouptype FROM Users
            WHERE login = \'' . $login .
            '\' AND password = \'' . 
            $password .'\'');
        if(!$result)
            echo 'Проблема с аутентификацией!';
        else
        {
            /* Нам нужна только первая строка результата */
            $row = mysqli_fetch_row($result);
            if($row)
            {
                $this->id = $row[0];
                $this->group = $row[1];
            }
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

    public function getGroup()
    {
        return $this->group;
    }
}
?>
