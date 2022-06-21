<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  
  <title></title>
   
</head>
<body>
     
  
     
           
    <fieldset>
  <form method="post" action="./Registration_validation.php" >
    <fieldset>
    
        <legend><h2><b>Registration</b></h2></legend><br>
    
      
        <label>Name : </label>
        <input type="text" id="name" name="name" ><br>
        <hr><br>
    
        <label>Email :</label>
        <input type="text" id="email" name="email" ><br>
        <hr><br>

         

         
    
        <label>User Name : </label>
        <input type="text" id="uname" name="uname" ><br>
        <hr><br>
    
        <label>Password :  </label>
        <input type="password" id="pword" name="pword" ><br>
        <hr><br>
    
        <label>Confirm Password : </label>
        <input type="password" id="conpword" name="conpword" ><br>
        <hr><br>
    
    
        <fieldset>
    
        <legend>Gender</legend>
    
        
    
        <input type="radio" name="gender" value="Male">
        <label class="male">Male</label>
    
        <input type="radio" name="gender" value="Female">
        <label class="female">Female</label>
    
        <input type="radio" name="gender" value="Other">
        <label class="other">Other</label>
    
        </fieldset>
    
        <hr>
    
    
    
    <fieldset>
    
    <legend>Date Of Birth</legend>
    
    
    
    <input type="text" id="date" name="date" size="5"> /
    <input type="text" id="month" name="month" size="5"> /
    <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
    
    
    </fieldset>
    
    
    
        <hr>

    
        <input type="submit" name="submit" id="submit" value="Submit">
        
        <input type="reset" name="reset" id="reset" value="Reset"><br><br>
    </fieldset>
    </form>
 
     
     
     
 

</body>
</html>