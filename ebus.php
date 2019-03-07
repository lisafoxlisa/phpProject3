<?php


session_start();
$fullNameValue = "";
$totalValue2 = "";

/* create a session variable for the mobile number
 * 
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        
        /*
         * alloate the session variable to a textbox
         * 
         */
        
        ?>
        
        <!DOCTYPE html>
        <html>
            
            <head>
                <title>eBusiness2</title>
                        
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


#calculations{
    text-align: left;
    margin-left: 2em;
    margin-bottom: 2em;
    
}
a:link, a:visited {
  background-color: #000000;
  color: white;
  padding: 14px 25px;
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


        </style>
            </head>
        <body>
        <div class="form">
            <form name="Details" method="post" action="ebus2.php">
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""/></td>
                        </tr>
                         <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNnum" value=""/></td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td><input type="password" value="" id="myInput"><br><br>
                            <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                            </td>


                        </tr>
                         <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                <center>
                    
                    
                <a href="calculator.html" class="previous">&laquo; Back</a>
      <a href="ebus2.php" class="btn btn-xl btn-dark mr-4" style="href-align: center;">
<font color="#FFFFFF">Continue</font>
</a>


            </form>
                
        </html>            




        

