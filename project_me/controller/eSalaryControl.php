<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salary Datatable</title>
</head>
    <?php
    session_start();  

   

        $name=$id=$jobclass=$salary="";
        $isValid=true;


        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "test";

           // Create connection
          $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
           // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
           }
        $name = stripcslashes($name);  
        $id = stripcslashes($id);  
        $jobclass =stripcslashes($jobclass);
        $salary=stripcslashes($salary);
    
        $name = mysqli_real_escape_string($conn, $name);  
        $id = mysqli_real_escape_string($conn, $id);
        $jobclass = mysqli_real_escape_string($conn, $jobclass);
        $salary = mysqli_real_escape_string($conn, $salary);
        
    


      
        $sql = "select * from salbd ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        if($count == true){  

            
                  echo"<table>
                     <td>
                       <tr>NAME</tr>
                       <tr>" . $row["name"] . "</tr>
                    </td>
                    <td>
                       <tr>ID</tr>
                       <tr>" . $row["id"] . "</tr>
                    </td>
                    <td>
                       <tr>JOBClASS</tr>
                       <tr>" . $row["jobclass"] . "</tr>
                    </td>
                    <td>
                       <tr>salary</tr>
                       <tr>" . $row["salary"] . "</tr>
                    </td>
                   
              </table>";
              

        
        }  
           else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
          
              
         
?>  



