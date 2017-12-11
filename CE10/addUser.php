<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if (isset($_POST['fname']))
            $name = $_POST['fname'];
        if (isset ($_POST['email']))
            $email = $_POST['email'];
        if (isset ($_POST['zip']))
            $zip = $_POST['zip'];
        if (isset ($_POST['country']))
            $country = $_POST['country'];

        
        echo "<div><h1>CE09 Form Validation</h1></div>";
                
              
            echo "Form data sucessfully validated:<br>".$name."<br>".$email."<br>".$zip."<br>".$country;
            
        ?>
    </body>
</html>
