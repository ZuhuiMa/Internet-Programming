<?php
include "Class.MY_XML_DOM.php";
$cars_xml = new MY_XML_DOM("cars.xml");
$cars_array = $cars_xml->getCarsInfo();
$start_index = 0;
$col_num = 4;
$row_num = (int) (count($cars_array) / $col_num);
for ($i = 0; $i <= $row_num; $i++) {
  echo "<tr>";
  foreach (array_slice($cars_array, $start_index, $col_num) as $car) {
    $MODEL = $car["MODEL"];
    $CATEGORY = $car['CATEGORY'];
    $AVAILABILITY = $car['AVAILABILITY'];
    $BRAND = $car['BRAND'];
    $MODEL_YEAR = $car['MODEL_YEAR'];
    $MILEAGE = $car['MILEAGE'];
    $FUEL_TYPE = $car['FUEL_TYPE'];
    $SEATS = $car['SEATS'];
    $PRICE_PER_DAY = $car['PRICE_PER_DAY'];
    $DESCRIPTION = $car['DESCRIPTION'];
    echo "<td><table class='car_info'>";
    echo "<tr><td><img src='./images/" . $MODEL . ".jpg' alt=''</td></tr>";
    echo "<tr><td class ='title'>$BRAND-$MODEL-$MODEL_YEAR</td></tr>";
    echo "<tr><td class ='data'><b>mileage:</b>$MILEAGE kms</td></tr>";
    echo "<tr><td class ='data'><b>fuel type:</b>$FUEL_TYPE</td></tr>";
    echo "<tr><td class ='data'><b>seats:</b>$SEATS</td></tr>";
    echo "<tr><td class ='data'><b>price per day:</b>$PRICE_PER_DAY</td></tr>";
    echo "<tr><td class ='data'><b>avilability:</b>$AVAILABILITY</td></tr>";
    echo "<tr><td class ='data'><div><b>description:</b>$DESCRIPTION<div></td></tr>";
    echo "<tr><td><input type='button' value ='Add to cart' class = 'button' onclick= 'check_availability(";
    echo '"';
    echo $MODEL;
    echo '"';
    echo ")'></td></tr>";
    echo "</table></td>";
  }
  echo "</tr>";
  $start_index += $col_num;
}
