<?php
class MY_XML_DOM
{
  protected $link;
  protected $target_file;
  public function __construct($target_file)
  {
    $this->target_file = $target_file;
    if (!file_exists($target_file)) {
      die("This file doesn't exist");
    } else {
      $this->link = new DOMDocument();
      $this->link->formatOutput = true;
      $this->link->load($this->target_file);
    }
  }
  public function getCarsInfo()
  {

    $car_collection = $this->link->documentElement;
    $cars = $car_collection->getElementsByTagName("CAR");
    $cars_array = array();
    foreach ($cars as $car) {
      $car_array = array();
      $MODEL = $car->getElementsByTagName("MODEL")->item(0)->textContent;
      $CATEGORY = $car->getElementsByTagName("CATEGORY")->item(0)->textContent;
      $AVAILABILITY = $car->getElementsByTagName("AVAILABILITY")->item(0)->textContent;
      $BRAND = $car->getElementsByTagName("BRAND")->item(0)->textContent;
      $MODEL_YEAR = $car->getElementsByTagName("MODEL_YEAR")->item(0)->textContent;
      $MILEAGE = $car->getElementsByTagName("MILEAGE")->item(0)->textContent;
      $FUEL_TYPE = $car->getElementsByTagName("FUEL_TYPE")->item(0)->textContent;
      $SEATS = $car->getElementsByTagName("SEATS")->item(0)->textContent;
      $PRICE_PER_DAY = $car->getElementsByTagName("PRICE_PER_DAY")->item(0)->textContent;
      $DESCRIPTION = $car->getElementsByTagName("DESCRIPTION")->item(0)->textContent;

      $car_array["MODEL"] = $MODEL;
      $car_array["CATEGORY"] = $CATEGORY;
      $car_array["AVAILABILITY"] = $AVAILABILITY;
      $car_array["BRAND"] = $BRAND;
      $car_array["MODEL_YEAR"] = $MODEL_YEAR;
      $car_array["MILEAGE"] = $MILEAGE;
      $car_array["FUEL_TYPE"] = $FUEL_TYPE;
      $car_array["SEATS"] = $SEATS;
      $car_array["PRICE_PER_DAY"] = $PRICE_PER_DAY;
      $car_array["DESCRIPTION"] = $DESCRIPTION;

      $cars_array[$MODEL] = $car_array;
    }
    return $cars_array;
  }
}
