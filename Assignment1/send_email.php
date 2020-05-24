<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php
session_start();
$total_quantity = $_SESSION['my_cart']['quantity'];
$total_price =  $_SESSION['my_cart']['total_price'];
unset($_SESSION['my_cart']['quantity']);
unset($_SESSION['my_cart']['total_price']);
$name = $_POST['name'];
$address = $_POST['address'];
$suburb = $_POST['suburb'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];

//extract personal information
$message = "
<html>
<head>
</head>
<style>
form td{
  text-align: center;
}
   table{
    border-collapse:separate; 
    border-spacing:10px;
    font-size: 16px;
  }
</style>
<body>
<p>This email is to confirm your order.</p>
<table>
<tr>
<td colspan='2'>Your Personal Information:</td>
</tr>
<tr>
<td>Name:</td>
<td>$name</td>
</tr>
<tr>
<td>Address:</td>
<td>$address</td>
</tr>
<tr>
<td>Suburb:</td>
<td>$suburb</td>
</tr>
<tr>
<td>State:</td>
<td>$state</td>
</tr>
<tr>
<td>Country:</td>
<td>$country</td>
</tr>
</table><br>";
$message .= "<table>
<tr><td colspan='6'>Order details:</td></tr>
<tr>
<td>Name<td>
<td>Quantity of unit<td>
<td>Quantity<td>
<td>Price<td>
</tr>";

//extract product information using for loop
foreach ($_SESSION['my_cart'] as $k => $v) {
  $product_name = $v['name'];
  $unit_quantity = $v['unit_quantity'];
  $quantity = $v['quantity'];
  $price = $v['price'];
  $message .= "
  <tr>
  <td>$product_name</td>
  <td></td>
  <td>$unit_quantity</td>
  <td></td>
  <td>$quantity</td>
  <td></td>
  <td>$price</td>
  </tr>";
}
$message .= "
<tr>
<td colspan='3'>Total quantity:</td>
<td >$total_quantity</td>
</tr>
<tr>
  <td colspan='3'>Total price:</td>
  <td>$total_price</td>
</tr>";
$message .= "</table></body></html>";


$to = $email;
$from = "no_reply@GroceryStore.com";
$headers = "From: $from" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to, "Order Confirmation ", $message, $headers);
session_destroy();
?>

<h2>Congratulations, order confirmation email has been sent to your email</h2>
<h3>Please check your email</h3>
<a href="index.php">Go back to home page</a>
  
</body>
</html>