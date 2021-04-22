<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cube Roo</title>
  </head>
  <body>

    <form action = "returnfunction.php" method ="post">
    Enter The Number:  <input type = "number" name = "number">
    <br>
    <input type="submit" name="submit">
   </form>

    <?php
    function cube($num)
    {
      return $num * $num *$num;
    }

      if(isset($_POST['number']))
      {
         calculate();
      }
      function calculate(){
          $number = cube($_POST['number']);
          echo "The result is: ".$number;
        }


     ?>

  </body>
</html>
