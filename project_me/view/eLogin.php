<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "style.css"> 
	<title>LOGIN PAGE</title>
	<script defer src="Login.js"></script>

</head>

<body>
	<div id = "frm">  
		<h1>Login</h1> 
		<form name="f1" action = "../controller/loginaction.php" onsubmit = "return validation()" method = "POST" novalidate> 
		<p>  
                <label> UserName: </label>  
                <input type = "text" id ="name" name  = "name" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div> 
    <center>
    <a href="eRegistration.php">| Not Registred |</a>
    </center>
</body>
</html>
<?php require "partial/footer.php"?>