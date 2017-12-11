
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Story Idea Generator</title>

        <style>
            body {
                font-family: "Trebuchet MS", Verdana, sans-serif;
                font-size: 16px;
                background-color: dimgrey; 
                color: #696969;
                padding: 3px;
            }

            #main {
                padding: 5px;
                padding-left:  15px;
                padding-right: 15px;
                background-color: #ffffff;
                border-radius: 0 0 5px 5px;
            }

            h1 {
                font-family: Georgia, serif;
                border-bottom: 3px solid #cc9900;
                color: #996600;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Story Idea Generator</h1>
        <div id="main">
            <form action="CE04/PHPsource.php" method="post">
                 Please Create a Character to put into the story.<br>
                    Name: <input type="text" name="Name"><br>
                Age: <input type="number" name="Age"><br>
                Gender: F<input type="radio" value="F" name="Gender" checked="true">  M<input type="radio" value="M" name="Gender"><br>
                Class: <select name="Class">
                    <option value="Detective">Detective</option>
                    <option value="Scientist">Scientist</option>
                    <option value="Soldier">Soldier</option>
                    <option value="Doctor">Doctor</option>
                </select><br>
                <input type="submit" value="Show Me" name="Create"><br>
                <input type="hidden" value ="1" name="sneaky">                                 
            </form>
        </div>
    </body>
</html>
