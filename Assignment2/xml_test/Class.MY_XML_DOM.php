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
      $model = $car->getElementsByTagName("MODEL")->item(0)->textContent;
      $category = $car->getElementsByTagName("CATEGORY")->item(0)->textContent;
      $brand = $car->getElementsByTagName("BRAND")->item(0)->textContent;
      $car_array["model"] = $model;
      $car_array["category"] = $category;
      $car_array["brand"] = $brand;
      $cars_array[$model] = $car_array;
    }
    return $cars_array;
  }
}
