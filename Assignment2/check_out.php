<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<?php
session_start();
if (!isset($_SESSION['car_cart'])) {
    $_SESSION['car_cart'] = array();
}
$total_price = 0;
foreach ($_POST as $model => $quantity) {
    $_SESSION['car_cart'][$model]['Rent_days'] = $quantity;
    $total_price += $_SESSION['car_cart'][$model]['Price Per Day'] * $quantity;
}
?>

<body>

    <div class=header>
        <p>Car Rental Center</p>
        <a href="http:index.php"><img src="./images/uts_logo.jpg" alt="" id="logo"></a>
        <input type="button" value="Car Reservation" class="button" id="cart">
    </div>
    <div class="content">
        <h1>Check Out</h1>
        <form action="send_email.php" method="POST">
            <table id="input_table">
                <tr>
                    <td colspan="2">Customer Details and Payment</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Please fill in yout details. <span style="color:red;">* </span> indicates required field.</p>
                    </td>
                </tr>
                <tr>
                    <td>First Name <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="first_name" id="" required></td>
                </tr>
                <tr>
                    <td>Last Name <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="last_name" id="" required></td>
                </tr>
                <tr>
                    <td>Email address <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td>Address Line 1 <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="address_l1" id="" required></td>
                </tr>
                <tr>
                    <td>Address Line 2</td>
                    <td colspan="2"><input type="text" name="address_l2" id=""></td>
                </tr>
                <tr>
                    <td>City <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="city" id="" required></td>
                </tr>
                <tr>
                    <td>State <span style="color:red;">*</span></td>
                    <td colspan="2"><input id="type" type="text" list="state_list" placeholder="Please Select Your State" name="state" required>
                        <datalist id="state_list">
                            <option value="New South Wales">New South Wales</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Queensland">Queensland</option>
                            <option value="Western Australia">Western Australia</option>
                            <option value="South Australia">South Australia</option>
                            <option value="Tasmania">Tasmania</option>
                            <option value="Australian Capital Territory">Australian Capital Territory</option>
                            <option value="Northern Territory"> Northern Territory</option>
                        </datalist></td>
                </tr>
                <tr>
                    <td>Post Code <span style="color:red;">*</span></td>
                    <td colspan="2"><input type="text" name="post_code" id="" required></td>
                </tr>
                <tr>
                    <td>Payment Type <span style="color:red;">*</span></td>
                    <td colspan="2"><input id="type" type="text" list="payment_list" placeholder="Please Select Your Payment Type" name="payment_type" required>
                        <datalist id="payment_list">
                            <option value="PayPal">PayPal</option>
                            <option value="After Pay">After Pay</option>
                            <option value="Visa">Visa</option>
                            <option value="Master">Master</option>
                        </datalist></td>

                </tr>
                <tr>
                    <td style="font-size: large;"><?php
                                                    echo "You are required to pay $" . $total_price;
                                                    ?></td>
                </tr>
                <tr>
                    <td>
                        <input type="button" class="button" value="Continue Selection" onclick="window.location.href = 'index.php'" style="width: auto;">
                    </td>

                    <td style="text-align: right">
                        <input onclick="return check();" type="submit" class="button" value="Booking" style="width: auto;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
    $(document).ready(function() {
        $("#cart").click(function() {
            window.location.href = "show_cart.php";
        });
    });
</script>
<script>
    function check() {
        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
        var obj = document.getElementById("email");
        if (!reg.test(obj.value)) {
            alert("Please check your email format");
            return false;
        } else {
            return true;
        }
    }
</script>