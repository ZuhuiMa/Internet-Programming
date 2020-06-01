<?php
session_start();

$model =  $_GET['model'];
unset($_SESSION['car_cart'][$model]);
echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";

?>