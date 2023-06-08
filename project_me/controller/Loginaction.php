<?php
		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "test";

    	$con = new mysqli($hostname, $username, $password, $database);

		if ($_SERVER['REQUEST_METHOD'] === 'POST')    

        {

         



            $user = $_POST["name"] ;

            $pass = $_POST["password"];

        if (empty($user) || empty($pass))
        {
             $message = "Please Fill All The Filed Properly ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
        }

        else
        {
           

            $sql = "SELECT * FROM euser WHERE name='$user' ";

            $stmt = $con->prepare($sql);



            $stmt->execute();

            $result = $stmt->get_result();

           

            $data=$result->fetch_assoc();

       



            if($data)

            {

                $sql1 = "SELECT * FROM euser WHERE name='$user' and password='$pass' ";

            $stmt1 = $con->prepare($sql1);



            $stmt1->execute();

            $res = $stmt1->get_result();

           

            $data1=$res->fetch_assoc();

            if ($data1) 
            {
             session_start();
            $_SESSION['username'] =  $_POST["name"] ;
            $isset=true;



            if($isset){
            $_SESSION['username'] = $user;
            setcookie("username",$user, time()+ 3600);
            echo "<script>window.open('../view/eDashboard.php', '_self')</script>";
            }
            }
            else
            {
                $message = "password did not match !!!  ";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/eLogin.php';</script>";
            }

            

            }

            else

            {

                $message = "Username not found !!! Check your submission ";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/eLogin.php';</script>";

            }

    }
 }

?>