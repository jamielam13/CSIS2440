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
                if((document.myForm.email.value == "") ||
                   !(document.myForm.email.indexOf("@") > 0)||
                   !(document.myForm.email.indexOf(".") > 0))   {
                    alert("Please provide a valid Email!");
                    document.myForm.email.focus();
                    return false;
                } 
                // var emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                // if(inputText.value.match(emailRegex))    {
                //     return true;
                // } else {
                //     alert("Please provide a valid email!");
                //     document.myForm.email.focus();
                //     return false;
                // }


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
            
        </script>
    </head>
    <body>
        <form action="addUser.php" method="post" name="myForm" onsubmit="return (validate());">
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