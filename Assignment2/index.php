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

<body onload="get_cars();">

  <div class=header>
    <p>Car Rental Center</p>
    <a href="http:index.php"><img src="./images/uts_logo.jpg" alt="" id="logo"></a>
    <input type="button" value="Car Reservation" class="button" id="cart">
  </div>
  <div class="content">
    <table id="cars_table" cellpadding="11px">

    </table>
  </div>
</body>

</html>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
  function get_cars() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("cars_table").innerHTML = xhttp.responseText;
      }
    }
    xhttp.open("GET", "get_cars_info.php", true);
    xhttp.send();

  }

  function check_availability(model) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        alert(xhttp.responseText);
      }
    }
    xhttp.open("GET", "change_cart.php?model=" + model, true);
    xhttp.send();
  }

  $(document).ready(function() {
    $("#cart").click(function() {
      window.location.href = "show_cart.php";

    });
  });
</script>