
<!DOCTYPE>
<html>
    <head>
           <style>
body {
  background-image: url("bg2.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
}

#main {
  background-image: url("bg2.jpg");
  width: 500px;
  border: 30px solid black;
  padding: 25px;
  margin: 25px;
}

div {
  font-family: Courier new;
  font-size: 20px;
}
input[type="button"]{
   background-color: #000000;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: Courier new;
  font-size: 12px;
}

#calculations{
    text-align: left;
    margin-left: 2em;
    margin-bottom: 2em;
}
</style>

    </head>
    <body>
        
        <!-- //starting the session to get the session variable from last page -->
        
    
    


<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is :".$fullNameValue.".";
echo "<br></br>";
echo "The total value is : ".$totalValue2.".";
?>
        <div>
        <br>
        <a href="ebus.php" class="previous">&laquo; Back</a>
        </div>


</body>
</html

