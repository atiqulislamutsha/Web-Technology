<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
    <?php
    session_start();  

    if($_SERVER["REQUEST_METHOD"]==="POST")
    {

        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $name=$password="";
        $nameErr=$nameErr= "";
        $isValid=true;
        $name = test($_POST['name']);
        $password= test($_POST['password']);


        if(empty($name))
        
        {
            $nameErr = "This field cannot be empty";
            $isValid=false;
        }
        else
        {
            $nameErr = "";
        }
        if(empty($password))
        {
            $passwordErr = "This field cannot be empty";
            $isValid=false;
        }
        else
        {
            $passwordErr = "";
        }
        if($isValid)
        {
            
            include '../model/eLogin.php';
        $name = stripcslashes($name);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($conn, $name);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from euser where name = '$name' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           session_start();
            header("location:../view/eDashboard.php");

        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }    

        
        }
        else
        {
            echo "Validation not done";
        }
    }
          
         
?>  



