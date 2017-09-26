<!DOCTYPE html>
<!-- Jamie Lam, age 28 -->
<html lang = "en"> 
    <head>
        <meta name= "viewport" content = "width=device-width, initial-scale=1">
    </head>
    <style>
        
    </style>
    <body>
       <?php
            $name = $_POST["Name"];
            $age = $_POST["Age"];
            $address = $_POST["Address"];
            $city = $_POST["City"];
            $state = $_POST["State"];
            $gender = $_POST["Gender"];
            echo "<br>";

            $person = "My name is $name. I am $age years old. <br> 
                I live at $address in $city, $state. <br>
                I am a $gender";
            printf($person);
            echo "<br>";

            if ($gender = "boy") {
                echo '<body style = "background-color:#B3E5FC">';
            } else  {
                echo '<body style = "background-color:#FFCDD2">';
            }

            $year = date("Y") - $age;
            for ($i = 0; $i <= $age; $i++)  {
                echo $year."<br>";
                $year ++;
            }
       ?>     
    </body>
</html>