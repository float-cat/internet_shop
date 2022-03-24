/**********************************
  Скрипт создания базы данных для
  интернет-магазина Мебелюха
**********************************/

-- Создаем базу данных
CREATE DATABASE Shop;

-- Переключаемся на созданную базу
USE Shop;

-- Таблица пользователей магазина
CREATE TABLE Users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(60) UNIQUE NOT NULL,
    login NVARCHAR(20) UNIQUE NOT NULL,
    -- В поле пароля хранится md5 пароля
    password VARCHAR(32) NOT NULL,
    firstname NVARCHAR(20) NOT NULL,
    surname NVARCHAR(20) NOT NULL,
    grouptype ENUM('User','Admin') NOT NULL,
    phone VARCHAR(20) UNIQUE NOT NULL
);

-- Таблица категорий товаров
CREATE TABLE Categoryes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    caption NVARCHAR(20) UNIQUE NOT NULL
);

-- Таблица производетелей товаров
CREATE TABLE Producers (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    caption NVARCHAR(20) UNIQUE NOT NULL
);

-- Таблица товаров
CREATE TABLE Products (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    caption NVARCHAR(40) NOT NULL,
    price INT NOT NULL CHECK (price >= 0),
    -- Скидка по умолчанию 0%
    discount INT DEFAULT 0 CHECK (discount < 100 AND discount >= 0),
    -- Описание товара
    description NVARCHAR(1000) NOT NULL,
    -- Флаг отображения
    display BOOL NOT NULL DEFAULT TRUE,
    -- Связь с категориями и производетелями
    categoryid INT NOT NULL,
    producerid INT NOT NULL,
    -- Поля могут быть заполнены только значениями первичных ключей связанных таблиц
    FOREIGN KEY (categoryid) REFERENCES Categoryes(id),
    FOREIGN KEY (producerid) REFERENCES Producers(id)
);

-- Таблица заказов
CREATE TABLE Orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    -- Статусы: Ожидание подтверждения, подтверждено, завершена отправка
    status ENUM('Prepare', 'Wait','Confirmed','Completed') NOT NULL,
    date DATE NOT NULL,
    -- Доставка: Курьер=True, Самовывоз=False
    delivery BOOL NOT NULL,
    phone VARCHAR(20) NOT NULL,
    -- Связь с пользователем
    userid INT NOT NULL,
    -- Зависимость к первичному ключу пользователя
    FOREIGN KEY (userid) REFERENCES Users(id)
);

-- Таблица отзывов о товаре
CREATE TABLE Comments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    message NVARCHAR(3000) NOT NULL,
    rating INT CHECK (rating <= 10 AND rating >= 0),
    -- Связь с товаром и автором отзыва
    productid INT NOT NULL,
    userid INT NOT NULL,
    -- Зависимость к первичному ключу товара и автора
    FOREIGN KEY (productid) REFERENCES Products(id),
    FOREIGN KEY (userid) REFERENCES Users(id)
);

-- Корзина
CREATE TABLE Basket (
    userid INT NOT NULL,
    productid INT NOT NULL,
    itemcount INT NOT NULL,
    PRIMARY KEY (userid, productid),
    FOREIGN KEY (userid) REFERENCES Users(id),
    FOREIGN KEY (productid) REFERENCES Products(id)
);

-- Информация о заказе
CREATE TABLE OrderInfo (
    orderid INT NOT NULL,
    productid INT NOT NULL,
    PRIMARY KEY (orderid, productid),
    itemcount INT NOT NULL,
    -- Цена товара и скидка хранятся, т.к. у товара они могут
    --  меняться, а тут должны быть те, которые актуальны во время
    --  регистрации заказа!
    productprice INT NOT NULL CHECK (productprice >= 0),
    -- Скидка по умолчанию 0%
    productdiscount INT DEFAULT 0 CHECK (productdiscount < 100 AND productdiscount >= 0),
    FOREIGN KEY (orderid) REFERENCES Orders(id),
    FOREIGN KEY (productid) REFERENCES Products(id)
);
