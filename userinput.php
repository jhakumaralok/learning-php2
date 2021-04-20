<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


       <form action = "userinput.php" method = "get">

          Name : <input type = "text" name = "name">
<br><br>
          Age : <input type = "number" name = "age">
<br><br>

<br><br>



          Number 1: <input type = "number" name = "Num1">
<br><br>
           Number 2: <input type = "number" name = "Num2">
<br><br>
           <input type = "submit">

          </form>
<br><br>



           Your name is :<?php  echo $_GET["name"]?>
<br><br>
           Your age is :<?php  echo $_GET["age"]?>
<br><br>

  Answer :  <?php echo $_GET["Num1"] + $_GET["Num2"] ?>




  </body>
</html>
