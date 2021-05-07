 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "associative-array.php" method = "post">
      <input type = "text" name ="student">
      <input type = "submit">
    </form>
    <?php

    $grades = array("Jim"=>"A+", "Pam"=>"B+", "Urusha"=>"C-");
    /*$grades["Pam"] = "F";
    echo $grades["Pam"];
    */
    //echo count($grades);
    echo $grades[$_POST["student"]];

     ?>

  </body>
</html>
