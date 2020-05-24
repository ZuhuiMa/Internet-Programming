<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .button {
    width: 75px;
    height: 20px;
    border-width: 0px;
    border-radius: 3px;
    background: #1E90FF;
    cursor: pointer;
    outline: none;
    font-family: Microsoft YaHei;
    color: white;
    font-size: 13px;
  }

  .button:hover {
    background: #5599FF;
  }

  form#input_form {
    left: 35%;
    top:10%;
    zoom: 110%;
    position: relative;
    
  }
  form#input_form table{
    border-collapse:separate; 
    border-spacing:20px;
    font-size: 16px;
  }
  form#input_form table td.right input {
    width: 250px;
  }
  
</style>

<body>
  <a href="./index.php"><img src="images/uts_logo.jpg" alt="Cannot load Logo" width="180" height="100" /></a>


  <form action="send_email.php"  method="POST" id="input_form">
    <table >
      <tr><td colspan="3"><p>Please complete all fields for the order to go ahead</p> </td></tr>
      <tr>
        <td>Name:</td>
        <td class="right" colspan="2"><input type="text" name="name" id="" required></td>
      </tr>
      <tr>
        <td>Address:</td>
        <td class="right" colspan="2"><input type="text" name="address" id="" required></td>
      </tr>
      <tr>
        <td>Suburb:</td>
        <td class="right" colspan="2"><input type="text" name="suburb" id="" required></td>
      </tr>
      <tr>
        <td>State:</td>
        <td class="right" colspan="2"><input type="text" name="state" id="" required></td>
      </tr>
      <tr>
        <td>Country:</td>
        <td class="right" colspan="2"><input type="text" name="country" id="" required></td>
      </tr>
      <tr>
        <td>Email address:</td>
        <td class="right" colspan="2"><input type="text" name="email" id="" required></td>
      </tr>
      <tr>
        <td>
          <input type="button" class="button" value="Back" onclick="javascript:history.back(-1);"></td>
        <td style="text-align: center"><input type="reset" class="button"></td>
        <td style="text-align: right"><input type="submit" class="button" value="Purchase"></td>
      </tr>
    </table>
  </form>

</body>

</html>