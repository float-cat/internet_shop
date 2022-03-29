<script type="text/javascript" src="js/catalog.js"></script>
<link rel="stylesheet" type="text/css" href="css/catalog.css" />
<?php
    include 'classes/Catalog.php';
    $catalog = new Catalog();
?>
 <div id="Catalog">
<?php
    foreach($catalog->getProducts() as $product)
    {
?>
    <div class="Product">
     <a href="?productid=<?php echo $product['id']; ?>">
      <?php echo $product['caption']; ?>
     </a>
     <br />
     <?php echo $product['price']; ?>
     <br />
     -<?php echo $product['discount']; ?>%
     <br />
     <a href="?catalog&categoryid=<?php echo $product['categoryid']; ?>">
      <?php echo $product['categorycaption']; ?>
     </a>
     <br />
     <a href="?catalog&producerid=<?php echo $product['producerid']; ?>">
      <?php echo $product['producercaption']; ?>
     </a>
    </div>
<?php
    }
?>
 </div>
