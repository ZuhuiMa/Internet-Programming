<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  <?php
  session_start();

  #提取值
  $id = $_GET['id']; #拼接id
  $id_index = "p" . $id;
  $name = $_GET['name'];
  $price = $_GET['price'];
  $unit_quantity = $_GET['unit_quantity'];
  #如果购物车中已经有该产品
  if (array_key_exists($id_index, $_SESSION['my_cart'])) {
    $_SESSION['my_cart']['quantity'] += 1;
    $_SESSION['my_cart']['total_price'] += $price;
    $_SESSION['my_cart'][$id_index]['quantity'] += 1;
  } else { #如果购物车中没有该产品
    $arr = array('id' => $id, 'name' => $name, 'unit_quantity' => $unit_quantity, 'quantity' => 1, 'price' => $price);
    echo "<br>";
    print_r($arr);
    echo "<br>";
    $_SESSION['my_cart'][$id_index] = $arr;
    $_SESSION['my_cart']['quantity'] += 1;
    $_SESSION['my_cart']['total_price'] += $price;
  };
  echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  ?>


</body>

</html>