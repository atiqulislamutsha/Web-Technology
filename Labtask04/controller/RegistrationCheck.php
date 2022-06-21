<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$gender= $_POST['gender'];
		$dob1=$_POST['dob1'];
		$dob2=$_POST['dob2'];
		$dob3=$_POST['dob3'];

		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=> $password, 'email'=> $email,'gender'=> $gender,'dob1'=> $dob1 ,'dob2'=> $dob2,'dob3'=> $dob3];
			$_SESSION['user'] = $user;
			header('location: ../view/Login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>