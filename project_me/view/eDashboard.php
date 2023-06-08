<?php session_start();
if (count ($_SESSION)==0)
{
    header("location: ../view/eLogin.php");
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin PAGE</title>
   
    <style>

div{

    text-decoration-color: white  ;
}
.button {
      
  
  background-color: lightskyblue;
  border: none;
  color: white;
  padding: 30px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
}
body{

    text-align: center;
    background-image: url("emplyoee.jpg");
}
h1{
    font-size: 30px;
}



</style>
</head>
<body>

    <section>
    <h1>DASHBOARD<h1>
    
    <br><br>
    
    <form  method="get" action="../model/eShowProfile.php">
     <button class="button" type="submit">PROFILE</button>
     </form>
     <form method="get" action="../view/eDashBANKING.php">
     <button class="button" type="submit">BANKING</button>
     </form>
     <form method="get" action="../view/eIndex.php">
     <button class="button" type="submit">SEARCHING</button>
     </form>
     <form method="get" action="../view/adminManageAccounts.php">
     <button class="button" type="submit">ACCOUNT</button>
     </form>
     <form method="get" action="../view/eLogout.php">
     <button class="button" type="submit">LOGOUT</button>
     </form>

    
    
</section>
<div>
<?php require "partial/footer.php"?>
</div>
</body>
</html>


