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
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 8', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 9', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 10', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 11', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 12', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 13', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 14', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 15', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 16', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 17', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 18', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 19', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 20', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 21', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 22', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 23', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 24', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 25', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 26', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 27', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 28', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 29', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 30', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 31', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 32', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 33', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 34', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
INSERT INTO Products (caption, price, discount, description, display,
 categoryid, producerid)
VALUES ('Гектор 35', 3000, 5, 'Отличный шкаф для хранения вещей',  TRUE, 1, 1);
