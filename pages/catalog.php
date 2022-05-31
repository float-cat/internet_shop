<script type="text/javascript" src="js/catalog.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<script type="text/javascript" src="js/orderCtrl.js"></script>
<link rel="stylesheet" type="text/css" href="css/catalog.css" />
<?php
    include 'classes/Catalog.php';
    $catalog = new Catalog();
    $catalog->loadProducts(0);
?>
 <script>
    var allProducts = [
 <?php
    foreach($catalog->getProducts() as $product)
    {
?>
        {
            caption: '<?php echo $product['caption']; ?>',
            price: <?php echo $product['price']; ?>,
            discount: <?php echo $product['discount']; ?>,
            categoryid: <?php echo $product['categoryid']; ?>,
            categorycaption: '<?php echo $product['categorycaption']; ?>',
            producerid: <?php echo $product['producerid']; ?>,
            producercaption: '<?php echo $product['producercaption']; ?>',
            count: 0
        },
<?php
    }
?>
    ];
 </script>
 <div id="CatalogTest">
 <form ng-app ng-controller="OrderFormController">
    <h1>Корзина</h1>
    <div>
        <!-- Подсчет общей стоимости всех выбранных услуг. Выводится по заданному формату валюты. -->
        Total: <span>{{total()}}</span> Count: <span>{{totalCount()}}</span>
    </div>
    <div class="Product" ng-repeat="product in products">
     <a href="?productid={{product.id}}">
      {{product.caption}}
     </a>
     <br />
      {{product.price}}
     <br />
      -{{product.discount}}%
     <br />
     <a href="?catalog&categoryid={{product.categoryid}}">
      {{product.categorycaption}}
     </a>
     <br />
     <a href="?catalog&producerid={{product.producerid}}">
      {{product.producercaption}}
     </a>
     <br />
      В корзине {{product.count}}
     <br />
     <span ng-click="AddProduct(product)">(+)</span>
     <span ng-click="RemProduct(product)">(-)</span>
    </div>
    <input id="nextBtn" type="button" value="Больше" ng-click="AppendProducts()"></input>
  </form>
 </div>
