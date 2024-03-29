<?php
include "settings.php";

$message = '';

if(isset($_POST["add_to_cart"]))
{
 if(isset($_COOKIE["shopping_cart"]))
 {
  $cookie_data = stripslashes($_COOKIE['shopping_cart']);

  $cart_data = json_decode($cookie_data, true);
 }
 else
 {
  $cart_data = array();
 }

 $item_id_list = array_column($cart_data, 'item_id');

 if(in_array($_POST["hidden_id"], $item_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
   }
  }
 }
 else
 {
  $item_array = array(
   'item_id'   => $_POST["hidden_id"],
   'item_name'   => $_POST["hidden_name"],
   'item_price'  => $_POST["hidden_price"],
   'item_quantity'  => $_POST["quantity"]
  );

  $cart_data[] = $item_array;
 }

 
 $item_data = json_encode($cart_data, JSON_UNESCAPED_UNICODE);
 setcookie('shopping_cart', $item_data, time() + (86400 * 30));
 header("location:shopping_cart.php?success=1");
}

if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
  $cookie_data = stripslashes($_COOKIE['shopping_cart']);
  $cart_data = json_decode($cookie_data, true);
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]['item_id'] == $_GET["id"])
   {
    unset($cart_data[$keys]);
    $item_data = json_encode($cart_data, JSON_UNESCAPED_UNICODE);
    setcookie("shopping_cart", $item_data, time() + (86400 * 30));
    header("location:shopping_cart.php?remove=1");
   }
  }
 }
 if($_GET["action"] == "clear")
 {
  setcookie("shopping_cart", "", time() - 3600);
  header("location:shopping_cart.php?clearall=1");
 }
}

if(isset($_GET["success"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Товар добавлен в корзину
 </div>
 ';
}

if(isset($_GET["remove"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Товар удалён из корзины
 </div>
 ';
}
if(isset($_GET["clearall"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Ваша корзина очищена
 </div>
 ';
}


?>
<html lang="ru">
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
    <div style="clear:both"></div>
   <br />
   <a href="main.php#goods"><h3>< Вернуться списку товаров</h3></a>
   <h3>Ваш заказ</h3>
   <div class="table-responsive">
   <?php echo $message; ?>
   <div align="right">
    <a href="shopping_cart.php?action=clear"><b>Очистить корзину</b></a>
   </div>
   <table class="table table-bordered">
    <tr>
     <th width="40%">Название товара</th>
     <th width="10%">Количество</th>
     <th width="20%">Цена</th>
     <th width="15%">Итого</th>
     <th width="5%">Действие</th>
    </tr>
   <?php
   if(isset($_COOKIE["shopping_cart"]))
   {
    $total = 0;
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
    foreach($cart_data as $keys => $values)
    {
   ?>
    <tr>
     <td><?php echo $values["item_name"]; ?></td>
     <td><?php echo $values["item_quantity"]; ?></td>
     <td><?php echo $values["item_price"]; ?> р.</td>
     <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> р.</td>
     <td><a href="shopping_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Удалить</span></a></td>
    </tr>
   <?php 
     $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
   ?>
    <tr>
     <td colspan="3" align="right">Итого</td>
     <td align="right"><?php echo number_format($total, 2); ?> р.</td>
     <td></td>
    </tr>
   <?php
   }
   else
   {
    echo '
    <tr>
     <td colspan="5" align="center">В корзине нет товаров</td>
    </tr>
    ';
   }
   ?>
   </table>
    </div>
   </div>
  </div>
  <br />
    </body>
</html>