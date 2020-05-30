<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p id= 'test' onclick="check_availability()">not check yet</p>
</body>
</html>

<script>

    function check_availability(){
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("test").innerHTML = xhttp.responseText;
                if (xhttp.responseText == "checked"){
                  alert ("已经检查");
                }
              }
        }
        xhttp.open("GET", "check_availability.php", true);
        xhttp.send();
        
    }
</script>