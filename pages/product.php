<?php
    include 'classes/Product.php';
    $product = new Product($_GET['productid']);
    $product = $product->getProduct();
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
     <?php echo $product['description']; ?>
     <br />
     <a href="?catalog&categoryid=<?php echo $product['categoryid']; ?>">
      <?php echo $product['categorycaption']; ?>
     </a>
     <br />
     <a href="?catalog&producerid=<?php echo $product['producerid']; ?>">
      <?php echo $product['producercaption']; ?>
     </a>
    </div>
