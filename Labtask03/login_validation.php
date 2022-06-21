<?php
	 
	if(isset($_POST['submit']))
	{
		
		if(strlen($_POST["username"])<2)
		{
			echo 'User Name must contain at least two (2) characters'; 
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo 'Password must not be less than eight (8) characters';  
		}
    if(strlen($_POST["username"])>=2 and strlen($_POST['password'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['password']); $i++) { 
			if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo 'Password must contain at least one of the special characters (@, #, $, %)';  
		}

		else{
      $userName =  $_POST [ 'username' ];
	    $password =   $_POST [ 'password' ];
		 
			
			

      if ( $flag = true ) {
				if(isset($_POST['rememberMe'])){
					setcookie('userName',$userName, time()+60*60*24*7);
				}
					
				
				
				
				session_start();
				$_SESSION['userName'] = $userName;
				$_SESSION['password'] = $password;
				
				
				
        //header('location: ../View/employeeDashBoard.php');
      }
      else{
        echo "Password or Username didn't match click here to"; 
      }
      
		}
  }
	} 
?>