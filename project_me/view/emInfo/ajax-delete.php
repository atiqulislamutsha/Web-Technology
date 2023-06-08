<?php

$employee_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","euserdb") or die("Connection Failed");

$sql = "DELETE FROM employees WHERE id = {$employee_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
