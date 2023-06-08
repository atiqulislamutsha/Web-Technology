<?php
if (isset($_SESSION["loginuser"]) || isset($_COOKIE["loginuser"])) { 
    header('location:../view/eDashboard.php');
}
$title="Signup";
include('partial/header.php');
?>
   

    <!DOCTYPE html>
    <html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script defer src="registration.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "Regstyle.css"> 
       
     <style>
          
        .column {
         float: right;
         width:50%;
         padding: 100px;
         }
     </style>

        <title>REGISTRATION PAGE</title>
    </head>
    <body>
        
       <div class="container">

            <?php if(isset($_SESSION["error"])){ ?> 
            <div style="color:red";>
                <?php echo $_SESSION["error"]; session_destroy();?>
            </div>
            <?php } ?>
            
            
                <h1>Signup</h1>
            
            <form name= "f1" action="../controller/eRegistrationControl.php" onsubmit = "return validation()"method="POST" enctype ="multipart/form-data" novalidate >
                 <div class="row">
                <div class="column">
                  <img src="em.png" alt="Snow" style="width:100%">
                 </div>

                <label><a>Name</a></label><br>
                <input type="text" placeholder="Enter Name" name="name"><br>
                <label><a>Email</a></label><br>
                <input type="text" placeholder="Enter Email" name="email"><br>
                <label><a>Username</a></label><br>
                <input type="text" placeholder="username" name="username"><br>               
                <label><a>Present Address</a></label><br>
                <input type="text" placeholder="Enter Address" name="address"><br>
                <label><a>City</a></label><br>
                <input type="text" placeholder="Enter City" name="city"><br>
                <label><a>Country</a></label><br>
                <input type="text" placeholder="Enter Country" name="country"><br>
                <label><a><a>Password</a></label><br>
                <input type="password" placeholder="Enter Password" name="password" ><br>
                <label><a><a><a>Re-password</a></label><br>
                <input type="password" placeholder="Enter Re-password" name="repassword"><br>
                <label><a>Gender</a></label><br>
                <input checked type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other<br>
                <label><a>Blood Group</a></label><br>
                <select name="bloodgroup" >

                    <option value="">Select</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select><br><br>
                <label><b>Date of Birth</b></label><br>
                <input type="date" name="dob"><br><br>

                                
                <button type="submit" name="submit" class="registerbtn">Sign Up</button><br>
                <label>
                    <a href="../view/eLogin.php" style="text-decoration: none;">Already have an account.</a>
                </label><br>
            </form>

        </div>  
    
    </body>
    </html>
    
      


<?php require "partial/footer.php"?>
