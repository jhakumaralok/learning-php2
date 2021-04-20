<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="userinput2.php" method="get">

    Color : <input type = "text" name= "color">
    <br><br>
    Plural Noun : <input type = "text" name = "plural Noun">
    <br><br>
    Celebrity : <input type = "tet" name = "celebrity">
    <br><br>
    <input type = "submit">
  </form>
    <br><br>


    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color<br>";
    echo "$pluralNoun are blue<br>";
    echo "I love $celebrity<br>";


     ?>
  </body>
</html>
