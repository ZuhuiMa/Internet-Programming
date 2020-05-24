<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="./main.css">
</head>



<body>
  <?php
  session_start();
  if (!isset($_SESSION['my_cart']['quantity'])) {
    $_SESSION['my_cart']['quantity'] = 0;
  }
  if (!isset($_SESSION['my_cart']['total_price'])) {
    $_SESSION['my_cart']['total_price'] = 0;
  }
  ?>
  <a href="./index.php"><img src="images/uts_logo.jpg" alt="Cannot load Logo" width="180" height="100" /></a>
  <!--Left layout--->
  <div class="left">
    <img id="left_image" src="images/base.png" usemap="#base_map">
    <map name="base_map">
      <area target="" alt="frozen_food" class="frozen_food" href="" coords="124,234,225,275" shape="rect">
      <area target="" alt="fresh_food" class="fresh_food" href="" coords="124,294,224,334" shape="rect">
      <area target="" alt="beverages" class="beverages" href="" coords="125,355,225,396" shape="rect">
      <area target="" alt="home_health" class="home_health" href="" coords="126,415,225,457" shape="rect">
      <area target="" alt="pet_food" class="pet_food" href="" coords="126,476,223,515" shape="rect">
    </map>
    <map name="frozen_food_map">
      <area target="" alt="back" class="back" href="" coords="241,518,518,519,515,-1,498,-1,499,255,364,255,366,284,240,285,241,345,241,423" shape="poly">
      <area target="" alt="back1" class="back" href="" coords="249,298,519,518" shape="rect">
      <area target="" alt="back2" class="back" href="" coords="154,225,1,1" shape="rect">
      <area target="" alt="back" class="back" href="" coords="4,14,519,1" shape="rect">
      <area target="" alt="back" class="back" href="" coords="502,517,519,13" shape="rect">
      <area target="" alt="1004" title="1004" href="check_product.php?id=1004" coords="393,20,493,60" shape="rect">
      <area target="" alt="1005" title="1005" href="check_product.php?id=1005" coords="395,83,495,124" shape="rect">
      <area target="" alt="1000" title="1000" href="check_product.php?id=1000" coords="394,147,493,186" shape="rect">
      <area target="" alt="1001" title="1001" href="check_product.php?id=1001" coords="393,210,494,250" shape="rect">
      <area target="" alt="1003" title="1003" href="check_product.php?id=1003" coords="243,116,345,156" shape="rect">
      <area target="" alt="1002" title="1002" href="check_product.php?id=1002" coords="244,238,344,275" shape="rect">
      <area target="" alt="fresh_food" class="fresh_food" href="" coords="124,294,224,334" shape="rect">
      <area target="" alt="beverages" class="beverages" href="" coords="125,355,225,396" shape="rect">
      <area target="" alt="home_health" class="home_health" href="" coords="126,415,225,457" shape="rect">
      <area target="" alt="pet_food" class="pet_food" href="" coords="126,476,223,515" shape="rect">
    </map>
    <map name="fresh_food_map">
      <area target="" alt="back" class="back" href="" coords="0,1,231,228" shape="rect">
      <area target="" alt="back" class="back" href="" coords="232,0,519,109,371,111" shape="rect">
      <area target="" alt="back" class="back" href="" coords="373,109,518,377" shape="rect">
      <area target="" alt="back" class="back" href="" coords="377,495,519,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="0,100,519,112" shape="rect">
      <area target="" alt="back" class="back" href="" coords="509,113,518,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="518,518,-1,519" shape="rect">
      <area target="" alt="3005" title="3005" href="check_product.php?id=3005" coords="263,117,363,157" shape="rect">
      <area target="" alt="3007" title="3007" href="check_product.php?id=3007" coords="264,178,362,217" shape="rect">
      <area target="" alt="3006" title="3006" href="check_product.php?id=3006" coords="263,236,363,277" shape="rect">
      <area target="" alt="3004" title="3004" href="check_product.php?id=3004" coords="263,297,362,339" shape="rect">
      <area target="" alt="3003" title="3003" href="check_product.php?id=3003" coords="262,358,362,397" shape="rect">
      <area target="" alt="3000" title="3000" href="check_product.php?id=3000" coords="403,388,502,427" shape="rect">
      <area target="" alt="3001" title="3001" href="check_product.php?id=3001" coords="403,448,503,487" shape="rect">
      <area target="" alt="3002" title="3002" href="check_product.php?id=3002" coords="263,477,363,517" shape="rect">
      <area target="" alt="frozen_food" class="frozen_food" href="" coords="124,234,225,275" shape="rect">
      <area target="" alt="beverages" class="beverages" href="" coords="125,355,225,396" shape="rect">
      <area target="" alt="home_health" class="home_health" href="" coords="126,415,225,457" shape="rect">
      <area target="" alt="pet_food" class="pet_food" href="" coords="126,476,223,515" shape="rect">
    </map>
    <map name="beverages_map">
      <area target="" alt="back" class="back" href="" coords="519,216,0,0" shape="rect">
      <area target="" alt="back" class="back" href="" coords="3,217,518,220" shape="rect">
      <area target="" alt="back" class="back" href="" coords="519,199,511,517" shape="rect">
      <area target="" alt="back" class="back" href="" coords="2,519,519,517" shape="rect">
      <area target="" alt="4000" title="4000" href="check_product.php?id=4000" coords="405,228,503,267" shape="rect">
      <area target="" alt="4001" title="4001" href="check_product.php?id=4001" coords="405,285,504,322" shape="rect">
      <area target="" alt="4002" title="4002" href="check_product.php?id=4002" coords="405,341,504,379" shape="rect">
      <area target="" alt="4005" title="4005" href="check_product.php?id=4005" coords="274,356,374,394" shape="rect">
      <area target="" alt="4003" title="4003" href="check_product.php?id=4003" coords="405,397,504,435" shape="rect">
      <area target="" alt="4004" title="4004" href="check_product.php?id=4004" coords="406,455,503,494" shape="rect">
      <area target="" alt="back" class="back" href="" coords="240,474,241,519,519,518,519,500,374,502,373,475" shape="poly">
      <area target="" alt="back" class="back" href="" coords="238,272,373,216" shape="rect">
      <area target="" alt="frozen_food" class="frozen_food" href="" coords="124,234,225,275" shape="rect">
      <area target="" alt="fresh_food" class="fresh_food" href="" coords="124,294,224,334" shape="rect">
      <area target="" alt="home_health" class="home_health" href="" coords="126,415,225,457" shape="rect">
      <area target="" alt="pet_food" class="pet_food" href="" coords="126,476,223,515" shape="rect">
    </map>
    <map name="home_health_map">
      <area target="" alt="back" class="back" href="" coords="-1,0,518,225" shape="rect">
      <area target="" alt="back" class="back" href="" coords="382,259,517,225" shape="rect">
      <area target="" alt="back" class="back" href="" coords="382,494,519,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="-1,222,519,228" shape="rect">
      <area target="" alt="back" class="back" href="" coords="502,214,508,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="-1,518,506,517" shape="rect">
      <area target="" alt="2006" title="2006" href="check_product.php?id=2006" coords="264,237,366,274" shape="rect">
      <area target="" alt="2003" title="2003" href="check_product.php?id=2003" coords="395,265,495,305" shape="rect">
      <area target="" alt="2004" title="2004" href="check_product.php?id=2004" coords="395,325,495,366" shape="rect">
      <area target="" alt="2000" title="2000" href="check_product.php?id=2000" coords="393,386,494,425" shape="rect">
      <area target="" alt="2001" title="2001" href="check_product.php?id=2001" coords="396,446,494,486" shape="rect">
      <area target="" alt="2005" title="2005" href="check_product.php?id=2005" coords="264,354,365,394" shape="rect">
      <area target="" alt="2002" title="2002" href="check_product.php?id=2002" coords="264,476,366,515" shape="rect">
      <area target="" alt="frozen_food" class="frozen_food" href="" coords="123,236,223,274" shape="rect">
      <area target="" alt="fresh_food" class="fresh_food" href="" coords="123,297,224,334" shape="rect">
      <area target="" alt="beverages" class="beverages" href="" coords="123,354,222,395" shape="rect">
      <area target="" alt="pet_food" class="pet_food" href="" coords="125,474,223,515" shape="rect">
    </map>
    <map name="pet_food_map">

      <area target="" alt="back" class="back" href="" coords="519,230,-1,226" shape="rect">
      <area target="" alt="back" class="back" href="" coords="502,227,506,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="4,518,509,519" shape="rect">
      <area target="" alt="back" class="back" href="" coords="5,519,506,517" shape="rect">
      <area target="" alt="back" class="back" href="" coords="372,436,513,519" shape="rect">
      <area target="" alt="5004" title="5004" href="check_product.php?id=5004" coords="264,297,362,334" shape="rect">
      <area target="" alt="5001" title="5001" href="check_product.php?id=5001" coords="397,326,496,366" shape="rect">
      <area target="" alt="5000" title="5000" href="check_product.php?id=5000" coords="395,385,494,424" shape="rect">
      <area target="" alt="5003" title="5003" href="check_product.php?id=5003" coords="262,416,362,455" shape="rect">
      <area target="" alt="5002" title="5002" href="check_product.php?id=5002" coords="262,475,364,515" shape="rect">
      <area target="" alt="frozen_food" class="frozen_food" href="" coords="124,234,225,275" shape="rect">
      <area target="" alt="fresh_food" class="fresh_food" href="" coords="124,294,224,334" shape="rect">
      <area target="" alt="beverages" class="beverages" href="" coords="125,355,225,396" shape="rect">
      <area target="" alt="home_health" class="home_health" href="" coords="126,415,225,457" shape="rect">
    </map>
  </div>
  <!--Top right layout--->

  <div class="top_right">
    <form action="./check_product.php" method="GET" class="search">
      <table>
        <tr>
          <td><input type="text" name="search" id="Search"></td>
          <td><input type="submit" value="Search"></td>
        </tr>
      </table>
    </form>
  </div>

  <div class='buttom_right'>
    <p id="check_information">Your cart is empty, please add one item at least.</p>
    <table>
      <tr>
        <th>quantity</td>
        <th>total price</td>
      </tr>
      <tr>
        <?php
        echo "<td>" . $_SESSION['my_cart']['quantity'] . "</td>";
        echo "<td>" . $_SESSION['my_cart']['total_price'] . "</td>";
        echo '<td><input type="button" value="Clear" class="button" id="clear_button" ';
        echo "onclick = ";
        echo '"window.location.href=';
        echo "'empty_cart.php";
        echo "'";
        echo '")></td>';
        echo '<td><input type="button" value="Check Out" class="button" id="check_out_button" ';

        echo '")></td>';

        ?>
      </tr>
    </table>
  </div>

</body>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
  $(document).ready(function() {
    //load the number of products in cart
    var num_products = <?php echo $_SESSION['my_cart']['quantity']; ?>;
    //check value of num_products
    //document.getElementById("show").innerHTML = num_products;
    $("#check_information").hide();
    $('#clear_button').click(function() {
      num_products = 0
    });
    $("#check_out_button").click(function() {
      //if the cart is empty
      if (num_products < 1) {
        $("#check_information").show();
      } else {
        //show success
        window.location.href = "check_out.php";
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $(".frozen_food").mouseover(function() {
      document.getElementById("left_image").src = 'images/frozen_food.png';
      document.getElementById("left_image").useMap = '#frozen_food_map';
    });

    $(".fresh_food").mouseover(function() {
      document.getElementById("left_image").src = 'images/fresh_food.png';
      document.getElementById("left_image").useMap = '#fresh_food_map';
    });
    $(".beverages").mouseover(function() {
      document.getElementById("left_image").src = 'images/beverages.png'
      document.getElementById("left_image").useMap = '#beverages_map';
    });
    $(".home_health").mouseover(function() {
      document.getElementById("left_image").src = 'images/home_health.png'
      document.getElementById("left_image").useMap = '#home_health_map';
    });
    $(".pet_food").mouseover(function() {
      document.getElementById("left_image").src = 'images/pet_food.png'
      document.getElementById("left_image").useMap = '#pet_food_map';
    });
    $(".back").mouseover(function() {
      document.getElementById("left_image").src = 'images/base.png'
      document.getElementById("left_image").useMap = '#base_map';

    });

    var num_products = <?php echo $_SESSION['my_cart']['quantity']; ?>;
    //check value of num_products
    //document.getElementById("show").innerHTML = num_products;
    $("#check_information").hide();
    $('#clear_button').click(function() {
      num_products = 0
    });
    $("#check_out_button").click(function() {
      //if the cart is empty
      if (num_products < 1) {
        $("#check_information").show();
      } else {
        //show success
        window.location.href = "check_out.php";
      }
    });

  });
</script>

</html>