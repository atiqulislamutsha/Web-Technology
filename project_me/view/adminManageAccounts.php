<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Manage Accounts</title>
    <link rel="stylesheet" href="http://localhost/wtproject/CSS/admin.css">
</head>

<body>
    <div id="box">
<h1>Manage Accounts</h1>

<style>
        a:link {
            text-decoration:dotted;
        }
        a:hover {
            color:red;
        }
        
    </style>

<div id="center">
  <a href="http://localhost/wtproject/Admin/adminHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/wtproject/Admin/adminManageAccounts.php">&nbsp&nbsp&nbsp&nbspManage Accounts</a>
  <a href="http://localhost/wtproject/Admin/adminViewAccounts.php" >&nbsp&nbsp&nbsp&nbspView All Accounts</a>

</div>

<form action="http://localhost/wtproject/Admin/adminProcess.php"  method = "post">
<h3>

    User Type : <select name="userType" >
     <option value="" selected></option>  
     <option value="Regular User">Regular User</option>
     <option value="Handyman">Handyman</option>
     </select>
     <br>
    User ID : <input type ="text"  name="userIDtoDelete" placeholder="USER ID" id="userID">
    <p id="errorUserID"></p>
    <br><br> 
    
    <br>
      
    <p>
     STATUS
    </p>
    <select name="status" >
     <option value="" selected></option>  
     <option value="Banned" >Banned Until Further Notice</option>
     <option value="Warned" >Warning for unusual Activity</option>
     <option value="Valid">Unban</option> 
     </select>
     
    <br> <br>
   <br> <br> <br>
   <input type="submit" name="changeStatus" value="CHANGE STATUS" >

</h3>
</form>



<script src="http://localhost/wtproject/JS/adminManageAccountValidation.js"></script>
<center> 
<a href="eDashboard.php">| Dashboard |</a> 
</center>
</div>
</body>
</html>
