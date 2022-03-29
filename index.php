<?php
 /* Подключаем средства отображения ошибок */
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 /* Соединяемся с базой данных */
 include 'modules/connectdb.php';
 /* Аутентификация */
 include 'handlers/auth.php';
?>

<html>
 <head>
  <title>
   Мебелюха - интернет-магазин мебели
  </title>
 </head>
 <body>
  <table id="MainTable" width="100%" height="100%">
   <tr>
    <td id="Logo">
     <img src="images/logo-picture.png" />
    </td>
    <td id="Header">
     <img src="images/logo-title.png" />
     <br />
     <?php include 'modules/menu.php'; ?>
     <?php include 'modules/login.php'; ?>
    </td>
   </tr>
   <tr>
    <td id="LeftMenu">
     Левое меню
    </td>
    <td id="Content">
     <?php
      if(isset($_GET['register']))
          include 'pages/registration.php';
      else if(isset($_GET['catalog']))
          include 'pages/catalog.php';
      else if(isset($_GET['productid']))
          include 'pages/product.php';
     ?>
    </td>
   </tr>
   <tr>
    <td id="Footer" colspan="2">
     Подвал
    </td>
   </tr>
  </table>
 </body>
</html>

<?php
 /* Разъединяимся с базой данных */
 include 'modules/disconnectdb.php';
?>
