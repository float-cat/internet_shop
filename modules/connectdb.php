<?php
 $bdhost = 'localhost';
 $bdusername = 'USER';
 $bdpassword = 'PASSWORD';
 $bdname = 'Shop';
 /* Соединяемся с СУБД MariaDB и выбираем базу данных */
 $mysqli = new mysqli($bdhost, $bdusername, $bdpassword, $bdname);
 if ($mysqli->connect_error) {
    die('Ошибка соединения с СУБД! #'.$mysqli->connect_errno.': '.$mysqli->connect_error);
 }
 /* Устанавливаем кодировку UTF-8 */
 $mysqli->set_charset('utf8');
?>
