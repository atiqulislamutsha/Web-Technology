<!DOCTYPE html>
<html>
<title>PROFILE PAGE</title>
<link rel = "stylesheet" type = "text/css" href = "../view/style.css"> 
<script defer src="../view/Login.js"></script>
<body>


	<div id = "frm">  
		<h1>PROFILE</h1> 
		<form name="f1" action = "../controller/eProfileControl.php" onsubmit = "return validation()" method = "POST" novalidate> 
		<p>  
                <label> UserName: </label>  
                <input type = "text" id ="name" name  = "name" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "SHOW PROFILE"/>  
            </p>  
        </form>  
    </div> 

</body>
</html>