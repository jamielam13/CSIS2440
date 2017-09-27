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

        /* alignment for text file */
        div {
            height: 100px;    
            padding: 50px;
            text-align: center;
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

            // displays information
            $person = "My name is $name.<br>
                I am $age years old. <br> 
                I live at $address in $city, $state. <br>
                I am a $gender<br>";
            printf($person);
            echo "<br>";

            // background color changes depending on sex
            if ($gender == "male"|| $gender == "Male") {
                echo '<body style = "background-color:#B3E5FC">'; //blue
            } else {
                echo '<body style = "background-color:#FFCDD2">'; //pink
            }

            //displays year consecutively from birth year to present year
            $year = date("Y") - $age; //present year minus age provided on form
            for ($i = 0; $i <= $age; $i++)  {
                echo $year."<br>";
                $year ++;
            }
            echo "<br>";
       ?>     

        <!-- file display -->
        <div>
            <?php
                $file = "PostPage.txt";
                $openFile = fopen($file, "r"); //open file
                $fileContents = fread($openFile, filesize($file)); //reading file
                echo "<p> $fileContents </p>"; //displaying contents of file
                fclose($openFile); //closing file
            ?>
        </div>
    </body>
</html>