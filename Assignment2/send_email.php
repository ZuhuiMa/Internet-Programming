<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>

<body>
    <?php
    session_start();

    $total_price = 0;
    foreach ($_SESSION['car_cart'] as $car) {
        $total_price += $car['Price Per Day'] * $car['Rent_days'];
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address_l1 = $_POST['address_l1'];
    $address_l2 = $_POST['address_l2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $post_code = $_POST['post_code'];
    $payment_type = $_POST['payment_type'];

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
<td>First Name:</td>
<td>$first_name</td>
</tr>
<tr>
<td>Last Name:</td>
<td>$last_name</td>
</tr>
<tr>
<td>Address Line 1:</td>
<td>$address_l1</td>
</tr>
<tr>
<td>Address Line 2:</td>
<td>$address_l2</td>
</tr>
<tr>
<td>City:</td>
<td>$city</td>
</tr>
<tr>
<td>State:</td>
<td>$state</td>
</tr>
<tr>
<td>Post Code:</td>
<td>$post_code</td>
</tr>
<tr>
<td>Payment Type:</td>
<td>$payment_type</td>
</tr>
</table><br>";
    $message .= "<table>
<tr><td colspan='6'>Order details:</td></tr>
<tr>
<td>Model<td>
<td>Mileage<td>
<td>Fuel Type<td>
<td>Seats<td>
<td>Price Per Day<td>
<td>Rent Days<td>
<td>Description<td>
</tr>";

    //extract product information using for loop
    foreach ($_SESSION['car_cart'] as $k => $v) {
        $Model = $v['Vehicle'];
        $mileage = $v['mileage'];
        $fuel_type = $v['fuel type'];
        $seats = $v['seats'];
        $price = $v['Price Per Day'];
        $rent_days = $v['Rent_days'];
        $Description = $v['Description'];
        $message .= "
  <tr>
  <td>$Model</td>
  <td></td>
  <td>$mileage</td>
  <td></td>
  <td>$fuel_type</td>
  <td></td>
  <td>$seats</td>
  <td></td>
  <td>$price</td>
  <td></td>
  <td>$rent_days</td>
  <td></td>
  <td>$Description</td>
  </tr>";
    }
    $message .= "

<tr>
  <td colspan='3'>Total price:</td>
  <td>$total_price</td>
</tr>";
    $message .= "</table></body></html>";


    $to = $email;
    $from = "no_reply@UtsHertz.com";
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