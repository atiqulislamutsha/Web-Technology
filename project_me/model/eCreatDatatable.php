<?php
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


//data insertion

$sql = "INSERT INTO euser (name, email,username,address,city,country,password,gender,bloodgroup,dob)
values('$name','$email','$usrname','$address','$city','$country','$password','$gender','$bloodgroup','$dob')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>