<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    $phrase = " to be or not to be"; //string data types
    $age = 30;  // integer datatypes
    $gpa =30.3;  // floatinig point datat imagetypes
    $isMale = false; //boolean datatypes

    $phrase ="Giraffe Academy";


    echo substr($phrase, 8);
    echo "<br>";

    echo substr($phrase, 8 , 3);
    echo "<br>";

    echo str_replace("Giraffe", "Panda", $phrase );
    echo "<br>";

    echo str_replace("affe", "Panda", $phrase );
    echo "<br>";

    echo strtoupper("$phrase<br>");
    echo strtolower("$phrase<br>");

      $phrase[0] = "P";
      echo $phrase;
      echo "<br>";

    echo strtoupper("Urusha Puri<br>");
    echo strlen("Urusha Puri<br>");

    echo "<br>";

    echo $phrase[0];

    echo "<br>";

    echo "Urusha Puri<br>"[0];





     ?>

  </body>
