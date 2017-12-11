<!DOCTYPE html>

<!-- Jamie Lam, age 28 -->

<html lang="en">
<head>
  <title>CE02 Days of the week</title>
  <meta charset = "utf-8">
  <meta name = "viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
      $d = date("D");
      echo "Today is ".$d."<br>";

      if ($d == "Fri") {
        echo "Have a nice weekend";
    } elseif ($d == "Wed") {
        echo "Have a nice Wednesday!";
    } else {
        echo "Have a nice day!";
    }
        echo $message."<br>"."<br>";
        
      switch ($d) {
        case "Mon":
              echo "Today is Monday";
              break;
        case "Tues": 
            echo "Today is Tuesday";
            break;
        case "Wed":
            echo "Today is Wednesday";
            break;
        case "Thur":
            echo "Today is Thursday";
            break;
        case "Fri":
            echo "Today is Friday";
             break;
        case "Sat":
            echo "Today is Saturday";
            break;
        case "Sun":
            echo "Today is Sunday";
            break;
        default:
            echo "Wonder which day is this?" ;   
      }
      echo $message."<br>"."<br>";;

      $a = 0;
      $b = 0;

      for($i = 0; $i < 5; $i++)   {
          $a += 10;
          $b += 5;
      }
      echo ("At the end of the loop a = $a and b = $b<br><br>");

      $i = 0;
      $num = 50;

      while($i <10) {
          $num--;
          $i++;
      }
      echo ("Loop stopped at i = $i and num = $num<br><br>");
    ?>

</body>
</html>