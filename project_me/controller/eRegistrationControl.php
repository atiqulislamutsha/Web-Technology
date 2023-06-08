<?php
    if (isset($_POST['submit'])) 
    {
        session_start();
        $name=$_POST['name'];
        $email=$_POST['email'];
        $usrname=$_POST['username'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $dob=$_POST['dob'];
        $cinn="";

        if (empty($name)) {
            $_SESSION["error"] = "<label>Input your name.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($email)) {
            $_SESSION["error"] = "<label>Input your Email.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($usrname)) {
            $_SESSION["error"] = "<label>Input your usrname.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($address)) {
            $_SESSION["error"] = "<label>Input your Address.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($city)) {
            $_SESSION["error"] = "<label>Input your City.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($country)) {
            $_SESSION["error"] = "<label>Input your Country.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($password)) {
            $_SESSION["error"] = "<label>Input your Password.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($repassword)) {
            $_SESSION["error"] = "<label>Input your Re-password.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($gender)) {
            $_SESSION["error"] = "<label>Input your Gender.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($bloodgroup)) {
            $_SESSION["error"] = "<label>Input your Blood Group.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        elseif (empty($dob)) {
            $_SESSION["error"] = "<label>Input your Date of Birth.</label>";
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        else{
            if ($password!=$repassword) {
                $_SESSION["error"] = "<label>Input your password not match.</label>";
                header('location:'.$_SERVER['HTTP_REFERER']);
                exit();
            }
            else{

                  require '../model/eCreatDatatable.php';
                }           
        }
    }
?>
