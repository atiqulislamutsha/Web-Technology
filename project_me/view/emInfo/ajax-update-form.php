<?php

$employee_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];

$conn = mysqli_connect("localhost","root","","euserdb") or die("Connection Failed");

$sql = "UPDATE employees SET first_name = '{$firstName}',last_name = '{$lastName}' WHERE id = {$employee_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
