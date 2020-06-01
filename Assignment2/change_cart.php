<?php
session_start();
include "Class.MY_XML_DOM.php";
$MODEL = $_GET['model'];
$cars_xml = new MY_XML_DOM('cars.xml');
$cars_array = $cars_xml->getCarsInfo();
$not_ava = True;
foreach ($cars_array as $car) {
  if ($car['AVAILABILITY'] == "True" && $car['MODEL'] == $MODEL) {
    $not_ava = False;
    $BRAND = $car['BRAND'];
    $MODEL_YEAR = $car['MODEL_YEAR'];
    $PRICE_PER_DAY = $car['PRICE_PER_DAY'];
    $NAME = "$MODEL_YEAR-$BRAND-$MODEL";
    $DESCRIPTION = $car['DESCRIPTION'];
    $MILEAGE = $car['MILEAGE'];
    $SEATS = $car['SEATS'];
    $FUEL_TYPE = $car['FUEL_TYPE'];
  }
}


if ($not_ava) {
  echo "Sorry, the car is not available now. Please use other cars.";
} else {
  # if car has been in cart
  if (array_key_exists($MODEL, $_SESSION['car_cart'])) {
    # don't do any thing
    echo "Add to the cart successfully";
  } else { # if not in cart
    $cur_car = array('Thumbnail' => $MODEL, 'Vehicle' => $NAME, 'mileage' => $MILEAGE, 'fuel type' => $FUEL_TYPE, 'seats' => $SEATS, 'Price Per Day' => $PRICE_PER_DAY, 'Description' => $DESCRIPTION);
    $_SESSION['car_cart'][$MODEL] = $cur_car;
    echo "Add to the cart successfully";
  }
}
