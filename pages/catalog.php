<?php
    include 'classes/Catalog.php';
    $catalog = new Catalog();
    foreach($catalog->getProducts() as $product)
    {
?>
    <div style="float: left;">
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
