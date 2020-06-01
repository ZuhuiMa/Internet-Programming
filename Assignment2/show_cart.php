<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<?php
session_start();
// session_destroy();
if (!isset($_SESSION['car_cart'])) {
    $_SESSION['car_cart'] = array();
}
?>

<body>

    <div class=header>
        <p>Car Rental Center</p>
        <a href="http:index.php"><img src="./images/uts_logo.jpg" alt="" id="logo"></a>
        <input type="button" value="Car Reservation" class="button" id="cart">
    </div>
    <div class="content">
        <form id="cart_info_form" action="check_out.php" , method="POST">
            <table id="car_reservation">
                <tr>
                    <td colspan="5" style="text-align: center ; font-size:x-large;  ">Car Reservation</td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <th>Vehicle</th>
                    <th>Price Per Day</th>
                    <th>Rental Days</th>
                    <th>Actions</th>
                </tr>

                <?php
                foreach ($_SESSION['car_cart'] as $car) {
                    $Thumbnail = $car['Thumbnail'];
                    $Vehicle = $car['Vehicle'];
                    $Price_Per_day = $car['Price Per Day'];
                    echo "<tr>";
                    echo "<td><img src='./images/" . $Thumbnail . ".jpg' alt=''</td>";
                    echo "<td>$Vehicle</td>";
                    echo "<td>$Price_Per_day</td>";
                    echo "<td><input name ='$Thumbnail' type='number' value=1></td>";
                    echo '<td><input type="button" value="Delete" class="button" ';
                    echo "onclick = ";
                    echo '"window.location.href=';
                    echo "'delete_car.php?model=$Thumbnail";
                    echo "'";
                    echo '")></td>';

                    echo "</tr>";
                }
                ?>
                <tr>
                    <td colspan="5" style="text-align:right;position:relative;left:120px;">
                        <input id="submit_button" class='button' type="submit" value="Proceeding to CheckOut" style="width: 200px; text-align:center; " onclick="return has_car(<?php echo sizeof($_SESSION['car_cart']); ?>)"></td>
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

<script type="text/javascript">
    function has_car(quantity) {
        if (quantity >= 1) {
            return true;
        } else {

            alert('No car has been reserved');
            return false;
        }
    }
</script>