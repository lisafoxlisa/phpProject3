<?php?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<html>
    
<head>
<title>Calculator</title>
<style>
body {
  background-image: url("bg2.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
}
text{
  font-family: Courier new;
  font-size: 20px;
}
</style>  
<script language="javascript" type="text/javascript">

<!--assinging values to the radio buttons -->
function subtotal() {
    //Enter in prices here
    var x = 5;
    var y = 10;
    var p = x + y * 12;
    var b = y * 12;
    
     if (document.getElementById('basicProgram').checked) {
     //Basic package is checked
     document.calculator.total.value = b;
     
        } else if (document.getElementById('proProgram').checked) {
         // Pro package is checked
         document.calculator.total.value = p;
    }
         
 }

<!--Calculations for discount and total-->
function calcDisc(){
var subTot = document.calculator.total.value;
var discTotal = ((subTot /100 *10))
document.calculator.discount.value = discTotal;
}

function calcTotal(){
var subTott = document.calculator.total.value;

var discTotal = document.calculator.discount.value;

var wholeTotal = (subTott - discTotal);

document.calculator.wholeTotal.value = wholeTotal;
}
    </script>  
    </head>

     <body>
              <!-- Opening a HTML form -->
         <form name="calculator">
             
         <!--User fills out form here -->
         
         <br />
         <input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
         <input type="radio" name="programType" id="proProgram" value="Pro" checked /> Pro  
         
         <!-- Here Results will be displayed -->
         
         <br />
         Subtotal: <input type="text" name="total">
         <br>
         <input type="button" value="Subtotal" onclick="javascript:subTotal();">
         </br>
         
         Discount: <input type="text" name="discount">
         <br>
         <input type="button" value="Discount" onclick="javascript:calcDisc();">
         </br>
         
         Total: <input type="text" name="wholeTotal">
         <br>
         <input type="button" value="Total" onclick="javascript:calcTotal();">
         
         
         </form>
    </body>
</html>

