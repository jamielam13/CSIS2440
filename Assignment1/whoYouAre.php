<!DOCTYPE html>
<!-- Jamie Lam, age 28 -->
<html lang = "en"> 
    <head>
        <meta name= "viewport" content = "width=device-width, initial-scale=1">
    </head>
    <style>
        body    {  
            text-align: center;
        }
        div {
            height: 100px;    
            padding: 50px;
            text-align: center;
        }
        radio.boy {
            background-color: #B3E5FC;
        }
    </style>
    <body>
        <h1>Who I am</h1>
       <?php
            $name = $_POST["Name"];
            $age = $_POST["Age"];
            $address = $_POST["Address"];
            $city = $_POST["City"];
            $state = $_POST["State"];
            $gender = $_POST["Gender"];
            echo "<br>";

            $person = "My name is $name.<br>
                I am $age years old. <br> 
                I live at $address in $city, $state. <br>
                I am a $gender<br>";
            printf($person);
            echo "<br>";

            // if ($gender = "boy"||"Boy") {
            //     echo '<body style = "background-color:#B3E5FC">';
            // }

            $year = date("Y") - $age;
            for ($i = 0; $i <= $age; $i++)  {
                echo $year."<br>";
                $year ++;
            }
            echo "<br>";
       ?>     

        <div>
            <?php
                $file = "PostPage.txt";
                $openFile = fopen($file, "r");
                $fileContents = fread($openFile, filesize($file));
                echo "<p> $fileContents </p>";
                fclose($openFile);
            ?>
        </div>
    </body>
</html>