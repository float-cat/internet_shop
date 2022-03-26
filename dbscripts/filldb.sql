-- Забиваем тестовые данные
USE Shop;

-- Администратор Логин: Админ Пароль: adminpass
INSERT INTO Users (email, login, password, firstname,
 surname, grouptype, phone)
VALUES ('admin@example.com', 'Админ', '25e4ee4e9229397b6b17776bfceaf8e7',
 'Админ', 'Сайта', 'Admin', '+7(800)000-00-00');

-- Категории
INSERT INTO Categoryes (caption) VALUES ('Шкафы');

-- Производители
INSERT INTO Producers (caption) VALUES ('Чудо-мебель');

-- Товары
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 1', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 2', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 3', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 4', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 5', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 6', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 7', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
