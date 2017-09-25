<!DOCTYPE html>
<!-- Jamie Lam, age 28 -->
<html lang = "en"> 
    <head>
        <meta name= "viewport" content = "width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="whoYouAre.php" method="POST">
            <ul>
                <li class = "first">Name:</li>
                <li class = "text"><input type="text" name="Name"></li>
                <li class = "first">Age:</li>
                <li class = "text"><input type="text" name= "Age"></li>
                <li class = "first">Address:</li>
                <li class = "text"><input type="text" name= "Address" maxlength= "20"></li>
                <li class = "first">State:</li
                <li class = "text"><input type="text" name= "State" maxlength= "15"></li>
                <li class = "first">Sex:</li
                <li class = "radio">
                    <input type="radio" value="Male" name= "Gender">Male
                    <input type="radio" value="Female" name= "Gender">Famale
                </li> <br>
                <input type="submit" name= "Submit" value= "Submit">
            </ul>
        </form>      
    </body>
</html>