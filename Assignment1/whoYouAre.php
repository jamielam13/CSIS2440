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

            if ($gender = "boy"||"Boy") {
                echo '<body style = "background-color:#B3E5FC">';
            }

            $year = date("Y") - $age;
            for ($i = 0; $i <= $age; $i++)  {
                echo $year."<br>";
                $year ++;
            }

            $file = "PostPage.txt";
            $openFile = fopen($file, "r");
            $fileContents = fread($openFile, filesize($file));
            echo $fileContents;
            fclose($openFile);
       ?>     
    </body>
</html>