<?php
include "Class.MY_XML_DOM.php";
$model = $_GET['model'];
$cars_xml = new MY_XML_DOM('cars.xml');
$cars_array = $cars_xml->getCarsInfo();
$not_ava = True;
foreach ($cars_array as $car) {
  if ($car['AVAILABILITY'] == "True" && $car['MODEL'] == $model) {
    $not_ava = False;
  }
}
if ($not_ava) {
  echo "Not Ok";
} else {
  echo "Ok";
}