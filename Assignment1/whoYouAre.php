<!DOCTYPE html>
<!-- Jamie Lam, age 28 -->
<html lang = "en"> 
    <head>
        <meta name= "viewport" content = "width=device-width, initial-scale=1">
    </head>
    <body>
       <?php
            $name = $_POST["Name"];
            $age = $_POST["Age"];
            $address = $_POST["Address"];
            $state = $_POST["State"];
            $gender = $_POST["Gender"];
            echo "<br>";

            $person = "My name is $name, I am $age years old. I live at $address in $state. I am a $gender";
            echo $person;
       ?>     
    </body>
</html>