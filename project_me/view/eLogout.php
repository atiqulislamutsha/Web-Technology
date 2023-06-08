<?php 
//reset and destroy session
session_start();
session_unset();
session_destroy();
header("Location: ../view/eLogin.php");
?>