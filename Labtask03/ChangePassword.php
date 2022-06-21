<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>(ChangePassword)</title>
  <style type="text/Css"> .color: red;
  </style>
  </head>
<body>

<?php
 $passErr="" ;
 $password=""; $currpass ="" ;


if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
     
    if (empty($_POST["password"])) {
        $passErr = "  Enter Your Password!";
    } else {
        $password = test_input($_POST["password"]);
        }
   
    if(!empty($_POST["password"])  ) {
        $password = test_input($_POST["password"]);
       
        if (strlen($_POST["password"]) <= '2') {
            $passErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        elseif(!preg_match("#[@]+#",$password)) {
            $passErr = "Your Password Must Contain  - >  @ ";
        }  

        else {
            $passdErr = " Enter Your Password!";
        }
    }
    if ($currpass==$password)
    {
        $passErr=" Type New password " ;
    }
    }

 
 
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1>Change Password</h1>
<b>Current Password</b>
<input type="text" name="Password">
<span class="error">* <?php echo $passErr;?></span><br><br>
 
<b style="color : green;"> New Password</b>
<input type="text" name="Password">
<span class="error">* <?php echo $passErr;?></span><br><br> 
 
<b style="color : red;">Re-Type New Password</b> 
<input type="text" name="Password">
<span class="error">* <?php echo $passErr;$currpass;?></span> <br><br>
 

 

 
<input type="submit" name="submit" value="Submit">
 

</form>
 



</body>
</html>