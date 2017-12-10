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

            $firstName = (string)$_POST["fname"];
            $lastName = (string)$_POST["lname"];
            $phoneNumber = (string)$_POST["phone"];
            $address = (string)$_POST["address"];
            $city = (string)$_POST["city"];
            $state = (string)$_POST["state"];
            $zip = $_POST["zip"];
            $userName = (string)$_POST["myusername"];
            $password = (string)$_POST["mypassword"];
            $gender = (string)$_POST["sex"];
            $relation = (string)$_POST["relation"];

            echo "<br>";

            $sql =  'CREATE TABLE FFVALIDATION (
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
            $firstTable = true;
            echo "table created";
            // if($_POST){
            //     if($_POST['requestTypeCreate']){
            //         $sql = "INSERT INTO FF(FirstName, LastName, PhoneNumber, Address, City, State, ZIP, UserName, Password, Gender, Relation) 
            //                 VALUES('$firstName', '$lastName', '$phoneNumber', '$address', '$city', '$state', '$zip', '$userName', '$password', '$gender', '$relation')";

            //         $ret = pg_query($db, $sql);
            //         if(!$ret){
            //             echo pg_last_error($db);
            //         }
            //         else {
            //             echo "Insert was successful! \n";
            //         }
            //     }
            //     else if($_POST['requestTypeUpdate']){
            //         $sql = "UPDATE FF SET FirstName = '$firstName', LastName = '$lastName', Address = '$address', City = '$city', State = '$state', ZIP = '$zip', UserName = '$userName', Password = '$password', Gender = '$gender', Relation = '$relation'
            //                 WHERE PhoneNumber = '$phoneNumber';";

            //         $ret = pg_query($db, $sql);
            //         if(!$ret){
            //             echo pg_last_error($db);
            //         }
            //         else {
            //             echo "Update was successful! \n";
            //         }
            //     }
            //     else if($_POST['requestTypeSearch']){

            //         $sql = "SELECT FF.FirstName, FF.LastName, FF.PhoneNumber, FF.Address, FF.City, FF.State, FF.ZIP, FF.Relation 
            //                 FROM FF
            //                 WHERE FirstName = '$firstName' /*OR LastName = '$lastName' OR Address = '$address' OR City = '$city' OR State = '$state' OR ZIP = '$zip' OR UserName = '$userName' OR Password = '$password' OR Gender = '$gender' OR Relation = '$relation'*/;";

            //         $ret = pg_query($db, $sql);
            //         if(pg_num_rows($ret) == 0){
            //             echo "Zero rows returned from search...";
            //         }
            //         else{
            //             if(!$ret){
            //                 echo pg_last_error($db);
            //             }
            //             else {
            //                 echo "Search was successful! \n";
            //             }
            //         }

            //         while($row = pg_fetch_row($ret)){
            //             $table = "<table>
            //                             <tr>
            //                                 <th>Firstname</th>
            //                                 <th>Lastname</th>
            //                                 <th>Address</th>
            //                                 <th>City</th>
            //                                 <th>State</th>
            //                                 <th>Zip</th>
            //                                 <th>Phone</th>
            //                                 <th>Relation</th>
            //                             </tr>
            //                             <tr>
            //                                 <td>$row[0]</td>
            //                                 <td>$row[1]</td>
            //                                 <td>$row[6]</td>
            //                                 <td>$row[3]</td>
            //                                 <td>$row[4]</td>
            //                                 <td>$row[5]</td>
            //                                 <td>$row[2]</td>
            //                                 <td>$row[7]</td>
            //                                 <td>$row[8]</td>
            //                             </tr>
            //                     </table>";
            //             printf($table);
            //         }

            //         $firstTable = false;
            //     }
            // }

            // if($firstTable){
            //     $table = "<table>
            //                 <tr>
            //                     <th>Firstname</th>
            //                     <th>Lastname</th>
            //                     <th>Address</th>
            //                     <th>City</th>
            //                     <th>State</th>
            //                     <th>Zip</th>
            //                     <th>Phone</th>
            //                     <th>Relation</th>
            //                 </tr>
            //                 <tr>
            //                     <td>$firstName</td>
            //                     <td>$lastName</td>
            //                     <td>$address</td>
            //                     <td>$city</td>
            //                     <td>$state</td>
            //                     <td>$zip</td>
            //                     <td>$phoneNumber</td>
            //                     <td>$relation</td>
            //                 </tr>
            //             </table>";

            //     printf($table);
            // }

            
            // echo"<br>";
            // pg_close($db);
         ?>     
    </body>
</html>