<?php
/*******************************************
  Класс загружает данные каталога
*******************************************/

class Catalog
{
    private $products = [];

    function __construct()
    {
        $this->loadProducts(0);
    }

    public function loadProducts($offset)
    {
        global $mysqli;
        $offset = $mysqli->real_escape_string($offset);
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
            LIMIT 20 OFFSET ' . $offset . '
        ');
        if(!$result)
        {
            echo 'Ошибка выборки каталога';
            return;
        }
        while($row = mysqli_fetch_row($result))
        {
            $tmpproduct['id'] = $row[0];
            $tmpproduct['caption'] = $row[1];
            $tmpproduct['price'] = $row[2];
            $tmpproduct['discount'] = $row[3];
            $tmpproduct['description'] = $row[4];
            $tmpproduct['display'] = $row[5];
            $tmpproduct['categoryid'] = $row[6];
            $tmpproduct['categorycaption'] = $row[7];
            $tmpproduct['producerid'] = $row[8];
            $tmpproduct['producercaption'] = $row[9];
            $this->products[] = $tmpproduct;
        }
    }

    public function getProducts()
    {
        return $this->products;
    }
}
