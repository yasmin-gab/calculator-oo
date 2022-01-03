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
               <input type="reset"class="reset" name="reset"  value="Reset" onclick="javascript:window.location.reload();"/>
               <input type="float" class="n1" name="n1" autocomplete="off" value="<?php if(isset($_GET['n1'])){echo $_GET['n1'];}  ?>" placeholder="Number 1">
               <div class="ops">
                  <div class="radio">
                     <label>
                        <input class="background-ops" type="radio" name="op" value="+">
                        <span>+</span>
                     </label>
                  </div>
                  <div class="radio">
                     <label>
                        <input class="background-ops" type="radio" name="op" value="-">
                        <span>-</span>
                     </label>
                  </div>
                  <div class="radio">
                     <label>
                        <input class="background-ops" type="radio" name="op" value="*">
                        <span>*</span>
                     </label>
                  </div>
                  <div class="radio">
                     <label>
                        <input class="background-ops" type="radio" name="op" value="/">
                        <span>/</span>
                     </label>
                  </div>
               </div>
               <input type="float" class="n2" name="n2" autocomplete="off" value="<?php if(isset($_GET['n2'])){echo $_GET['n2'];}  ?>" placeholder="Number 2">
               <input type="submit" id="result" value="=">
               <input type="float" class="result" value="<?php if(isset($_GET['total'])){echo $_GET['total'];}  ?>" >
            </div>
         </form>
      </div> 
   </div>
</body>
</html>

