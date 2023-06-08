<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MY PROFILE </title>
  <style>
    body{
       background-image: url("emplyoee.jpg");
    }
table, th, td {
  background-image: url("emplyoee.jpg");
  border: 2px solid;
  width: 100%;

  height: 100%;
  background-color: skyblue;

}
</style>
</head>
<body>
	<?php 
  
           
              echo"<table>
                   <tr>
                      <td>NAME</td>
                      <td>".$row["name"]."</td>
                    </tr>
                    <tr>
                       <td>EMAIL</td>
                       <td>". $row["email"] . "</td>
                    </tr>
                     <tr>
                       <td>ADDRESS</td>
                       <td>". $row["address"] . "</td>
                    </tr>
                     <tr>
                       <td>CITY</td>
                       <td>". $row["city"] . "</td>
                    </tr>
                     <tr>
                       <td>GENDER</td>
                       <td>". $row["gender"] . "</td>
                    </tr>
                     <tr>
                       <td>BLOODGROUP</td>
                       <td>". $row["bloodgroup"] . "</td>
                    </tr>

              </table>"
                
             
          ?>

</body>
</html>




