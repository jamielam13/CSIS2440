<!DOCTYPE html>
<html>
    <head>
        <title>An Example Form</title>
    <style>
      .signup {
        border:1px solid #999999;
        font:  normal 14px helvetica;
        color: #444444;
      }
    </style>
        <script type="text/javascript">
            //Form Validation code:
            function validate() {
                if(document.myForm.fname.value == "")   {
                    alert("Please provide your Name!");
                    document.myForm.fname.focus();
                    return false;
                }

                if(document.myForm.zip.value === "" ||
                isNaN(document.myForm.zip.value) ||
                document.myform.zip.length !==5 )   {
                    alert("Please provide a Zip Code in the format #####");
                    document.myForm.zip.focus();
                    return false;
                }
                if(document.myForm.country.value === "-1")  {
                    alert("Please provide your country!");
                    return false;
                }
                return(true);
            }
            //email vailidation
            function ValidateEmail(inputText)  {  
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
                if(inputText.value.match(mailformat))  {  
                    document.myForm.email.focus();  
                    return true;  
                }  else  {  
                    alert("You have entered an invalid email address!");  
                    document.myForm.email.focus();  
                    return false;  
                }  
            } 
            
        </script>
    </head>
    <body>
        <h3>CE10 Assignment- email validation</h3>
        <form action="addUser.php" method="post" name="myForm" onsubmit="return (ValidateEmail(document.myForm.email));">
            <table cellspacing="2" cellpadding="2" border="1">
                <tr>
                    <td align="right">Name</td>
                    <td><input type="text" name="fname" /> </td>
                </tr>
                <tr>
                    <td align="right">Email</td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td align="right">Zip Code</td>
                    <td><input type="text" name="zip" /></td>
                </tr>
                <tr>
                    <td align="right">Country</td>
                    <td>
                    <select name="country">
                        <option value="-1" selected>[choose yours]</option>    
                        <option value="1">USA</option>
                        <option value="2">UK</option>
                        <option value="3">INDIA</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td><input type="submit" value="submit" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>