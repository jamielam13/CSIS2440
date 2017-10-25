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
        <h1>Results</h1>

       <?php
            define('DB_NAME', 'Assignment1');
            define('DB_USER', 'root');
            define('DB_PASSWORD', '');
            define('DB_HOST', 'local host');

            $link = mysql_connect(DB_NAME, DB_USER, DB_PASSWORD, DB_HOST);
            if (!$link) {
                die('Could not connect: '.mysql_error());
            }
            $db_selected = mysql_select_db(DB_NAME, $link);
            if (!$db_selected)  {
                    die('Cannot use '.DB_NAME.':'.mysql_error());
            }

            $firstName = $_POST["fname"];
            $lastName = $_POST["lname"];
            $phoneNumber = $_POST["phone"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $zip = $_POST["zip"];
            $userName = $_POST["myuserName"];
            $password = $_POST["mypassword"];
            $gender = $_POST["sex"];
            $relation = $_POST["relation"];
            echo "<br>";

            $table = "<table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Phone</th>
                </tr>
                <tr>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$address</td>
                    <td>$city</td>
                    <td>$state</td>
                    <td>$zip</td>
                    <td>$phoneNumber</td>
                    <td>$gender</td>
                    <td>$relation</td>
                </tr>
            </table>";

            $sql = "INSERT INTO friendsAndFamily(fname, lname, phone, address, city, state, zip, myusername, mypassword, sex, relation) VALUES ($firstName, $lastName, $address, $city, $state, $zip, $userName, $password, $gender, $relation)";

            if (!mysql_query($sql)) {
                die('Error: '.mysql_error());
            }

            printf($table);
            echo"<br>";
            mysql_close();
         ?>     
    </body>
</html>