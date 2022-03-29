<form name="search" method="GET">
 <a href="/">
  Главная
 </a>
 <a href="?catalog">
  Каталог
 </a>
 <a href="?orders">
  Заказы
 </a>
 <input name="catalog" style="display: none;">
 </input>
 <select name="sort" size="1" onchange="this.form.submit();">
  <option value="price_asc" <?php
  if(isset($_GET['sort'])
    && $_GET['sort'] == 'price_asc')
    echo 'selected'; ?>
  >
   Сначала дешевле
  </option>
  <option value="price_desc" <?php
  if(isset($_GET['sort'])
    && $_GET['sort'] == 'price_desc')
    echo 'selected'; ?>
  >
   Сначала дороже
  </option>
  <option value="discount" <?php
  if(isset($_GET['sort'])
    && $_GET['sort'] == 'discount')
    echo 'selected'; ?>
  >
   Сначала скидки
  </option>
  <option value="asc" <?php
  if(isset($_GET['sort'])
    && $_GET['sort'] == 'asc')
    echo 'selected'; ?>
  >
   По алфавиту
  </option>
  <option value="desc" <?php
  if(isset($_GET['sort'])
    && $_GET['sort'] == 'desc')
    echo 'selected'; ?>
  >
   Против алфавита
  </option>
 </select>
 <input name="str" placeholder="Что Вы ищете?"
  pattern="^[A-Za-zА-Яа-яЁё\d\s]+$" value="<?php
    if(isset($_GET['str']))
        echo $_GET['str'];
  ?>">
 </input>
 <input type="submit" value="Поиск">
 </input>
</form>
