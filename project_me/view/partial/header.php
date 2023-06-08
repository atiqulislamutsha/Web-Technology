<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
</head>
<body>
    <header>
    <header>
        <nav>
            <a href="../index.php">Home</a>
            <?php if(isset($_SESSION['key'])){
                echo'<a href="./eLogout.php">Logout</a>';
            }
            else{
                echo '<a href="./eLogin.php">Login</a> ';
                echo '<a href="./eRegistration.php">Registration</a>';
            } ?>
        </nav>
    </header>
    </header>