<?php
include 'classes/calc.class.php';

$calc = new Calculator();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
   <div class="container-form" >
      <div class="calc-form" >
         
         <form method="POST" action="calc.php" >
            <div class="results">
               <input type="float" class="n1" name="n1" autocomplete="off" value="<?php if(isset($_GET['n1'])){echo $_GET['n1'];}  ?>" placeholder="Number 1">
               <select name="op">
                  <option>Select</option>
                  <option>+</option>
                  <option>-</option>
                  <option>*</option>
                  <option>/</option>
               </select>
               <input type="float" class="n2" name="n2" autocomplete="off" value="<?php if(isset($_GET['n2'])){echo $_GET['n2'];}  ?>" placeholder="Number 2">
               <input type="submit" id="result" value="=">
               <input type="float" class="result" value="<?php if(isset($_GET['total'])){echo $_GET['total'];}  ?>" >
               <input type="reset"class="reset" name="reset"  value="Reset" onclick="javascript:window.location.reload();"/>
            </div>
            <!--
            <div class="numbers" >
               <div class="number" >
                  <input type="button" value="7" onClick="document.calculator.ans.value+='7'">
                  <input type="button" value="8" onClick="document.calculator.ans.value+='8'">
                  <input type="button" value="9" onClick="document.calculator.ans.value+='9'">
                  <input class="background-ops" type="button" name="op" value="*" onClick="document.calculator.ans.value+='*'">
               </div>
               <div class="number">
                  <input type="button" value="4" onClick="document.calculator.ans.value+='4'">
                  <input type="button" value="5" onClick="document.calculator.ans.value+='5'">
                  <input type="button" value="6" onClick="document.calculator.ans.value+='6'">
                  <input class="background-ops" type="button" name="op" value="-" onClick="document.calculator.ans.value+='-'">
               </div>
               <div class="number">
                  <input type="button" value="1" onClick="document.calculator.ans.value+='1'">
                  <input type="button" value="2" onClick="document.calculator.ans.value+='2'">
                  <input type="button" value="3" onClick="document.calculator.ans.value+='3'">
                  <input class="background-ops" type="button" name="op" value="+" onClick="document.calculator.ans.value+='+'">
               </div>
               <div class="number">
                  <input type="button" value="0" onClick="document.calculator.ans.value+='0'">
                  <input type="button" value="." onClick="document.calculator.ans.value+='.'">
                  <input class="background-ops" id="result" type="submit" value="=" />
                  <input class="background-ops" type="button" name="op" value="/" onClick="document.calculator.ans.value+='/'">
               </div>
            </div> -->
         </form>
      </div> 
   </div>
</body>
</html>

