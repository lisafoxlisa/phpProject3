<!DOCTYPE html>
<html>
    <head>
        
        <title> Receipt</title>
        <link rel="stylesheet" type="text/css" href="Ebus2.css" />
    </head>
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
a:link, a:visited {
  background-color: #000000;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: Courier new;
  font-size: 20px;
}

a:hover, a:active {
    background-color: #da061d;
}
</style>
    <body background= "BackgroundHome.jpg" 
          style= background-size:cover;>
        <a href ="ebus.php">Back</a>
    <center>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is  " .$totalValue2.".";
        ?>
        </center>    
    </body>
</html>

