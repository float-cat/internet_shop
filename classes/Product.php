<?php
/*******************************************
  Класс загружает данные продукта
*******************************************/

class Product
{
    private $product = [];

    function __construct($productid)
    {
        global $mysqli;
        $productid = $mysqli->real_escape_string($productid);
        $result = $mysqli->query('
            SELECT Products.id, Products.caption, Products.price,
            Products.discount, Products.description, Products.display,
            Products.categoryid, Categoryes.caption,
            Products.producerid, Producers.caption
            FROM Products
            JOIN Categoryes
                ON Products.categoryid = Categoryes.id
            JOIN Producers
                ON Products.producerid = Producers.id
            WHERE Products.id = ' . $productid . '
        ');
        if(!$result)
        {
            echo 'Ошибка выборки товара';
            return;
        }
        $row = mysqli_fetch_row($result);
        if($row)
        {
            $this->product['id'] = $row[0];
            $this->product['caption'] = $row[1];
            $this->product['price'] = $row[2];
            $this->product['discount'] = $row[3];
            $this->product['description'] = $row[4];
            $this->product['display'] = $row[5];
            $this->product['categoryid'] = $row[6];
            $this->product['categorycaption'] = $row[7];
            $this->product['producerid'] = $row[8];
            $this->product['producercaption'] = $row[9];
        }
        else
            echo 'Такого товара нет!';
    }

    public function getProduct()
    {
        return $this->product;
    }
}
