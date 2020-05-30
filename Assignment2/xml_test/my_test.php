<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>读取xml测试</h1>
  <?php
  include "Class.MY_XML_DOM.php";
  $cars_xml = new MY_XML_DOM("cars.xml");
  $cars_array = $cars_xml->getCarsInfo();
  print_r($cars_array)
  ?>

</body>

</html>