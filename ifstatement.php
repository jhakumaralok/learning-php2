<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function getmax($num1, $num2){
      if($num1>$num2){

        return $num1;
      }
      else{
        return $num2;
      }

    }
    echo getmax(58, 56);

     ?>

  </body>
</html>
