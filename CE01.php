<!DOCTYPE html>

<!-- Jamie Lam, age 28 -->

<html lang="en">
<head>
  <title>CE01 Hello World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
    <h3>My First PHP program</h3>

    <?php
      echo "hello world! <br>";
      
      $greeting = "PHP is fun! <br>";
      echo $greeting;

      $firstName = "Jamie";
      $lastName = "Lam";
      echo "My name is ".$firstName, " ".$lastName;

      $secondsPerhour = 60 * 60 * 60; 
      echo "<br> The number of seconds in one hour: ".$secondsPerhour;
    ?>

</body>
</html>