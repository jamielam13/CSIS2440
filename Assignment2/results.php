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
            $host = "host = ec2-23-21-220-48.compute-1.amazonaws.com";
            $port = "port = 5432";
            $dbname = "dbname = d52gdmpv25bd6a";
            $credentials = "user = dpqaocaoxtoydl password = 2ea2102f524bb14b766ff215e1551c2ce3d01961e2bfcbc50499ecddd449f83d";

            $db  = pg_connect("host=ec2-23-21-220-48.compute-1.amazonaws.com port=5432 dbname=d52gdmpv25bd6a user=dpqaocaoxtoydl password=2ea2102f524bb14b766ff215e1551c2ce3d01961e2bfcbc50499ecddd449f83d");

            if (!$db) {
                echo('Could not connect');
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

            $sql =  'CREATE TABLE FF (
                        ID  SERIAL PRIMARY KEY,
                        FirstName   TEXT    NOT NULL,
                        LastName    TEXT    NOT NULL,
                        PhoneNumber TEXT    NOT NULL,
                        Address     TEXT    NOT NULL,
                        City        TEXT    NOT NULL,
                        State       TEXT    NOT NULL,
                        ZIP         INT     NOT NULL,
                        UserName    TEXT    NOT NULL,
                        Password    TEXT    NOT NULL,
                        Gender      TEXT    NOT NULL,
                        Relation    TEXT    NOT NULL
                    )';

            // $sql = "INSERT INTO FF VALUES('', '$firstName', '$lastName', '$phoneNumber', '$address', '$city', '$state', '$zip', '$userName', '$password', '$gender', '$relation')";

            $ret = pg_query($db, $sql);
            if(!$ret){
                echo pg_last_error($db);
            }
            else {
                echo "Insert was successful! \n";
            }

            $table = "<table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Phone</th>
                    <th>Relation</th>
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

            printf($table);
            echo"<br>";
            pg_close($db);
         ?>     
    </body>
</html>