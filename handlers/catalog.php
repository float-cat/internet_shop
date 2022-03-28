<?php
 /* Подключаем средства отображения ошибок */
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 if(isset($_POST['lastProductid']))
 {
    include '../modules/connectdb.php';
    include '../classes/Catalog.php';
    $catalog = new Catalog();
    $catalog->loadProducts($_POST['lastProductid']);
    $JSONresult = json_encode($catalog->getProducts());
    echo $JSONresult;
    include '../modules/disconnectdb.php';
 }
?>
