<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  <title> </title>
   
</head>
<body>
   
  
     
     
    <fieldset>
      <form method="post" action="./login_validation.php"> 
        <fieldset>
          <legend><h2><b>LOGIN</b></h2></legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="userNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passwordValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>	
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href=Forget password?> Forget password?  </a> 
                   
                </td>
                
              </tr>
            
                
            </table>  
              
            
        </fieldset>
      </form>
    </fieldset>  
     
     
 
    

     
 