-- Забиваем тестовые данные
USE Shop;

-- Администратор Логин: Админ Пароль: adminpass
INSERT INTO Users (useremail, userlogin, userpassword, userfirstname,
 usersurname, usergroup, userphone)
 VALUES ('admin@example.com', 'Админ', '25e4ee4e9229397b6b17776bfceaf8e7',
 'Админ', 'Сайта', 'Admin', '+7(800)000-00-00');
