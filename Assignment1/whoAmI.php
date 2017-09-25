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
                <input type="text" name="Name">

                <li class = "first">Age:</li>
                <input type="text" name= "Age">

                <li class = "first">Address:</li>
                <input type="text" name= "Address" maxlength= "20">

                <li class = "first">City:</li>
                <input type="text" name= "City" maxlength= "20">

                <li class = "first">State:</li>
                <input type="text" name= "State" maxlength= "15">
                
                <li class = "first">Sex:</li>
                <input type="radio" value="Male" name= "Gender">Male
                <input type="radio" value="Female" name= "Gender">Famale
                <br>
                <input type="submit" name= "Submit" value= "Submit">
            </ul>
        </form>      
    </body>
</html>