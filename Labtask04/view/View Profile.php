<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
</head>

<body>
    <center>
        <table border="1" width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>XCompany</b></h3>
                            </td>
                            <td align="Right">
                            Logged in as
                                <a href="View Profile.php"><?=$_SESSION['user']['username']?></a> |
                                <a href="../controller/Logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="150px" width="200px">
                    Account<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View Profile.php">View Profile</a></li>
                        <li><a href="Edit Profile.php">Edit Profile</a></li>
                        <li><a href="Change Profile Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>PROFILE</legend>
			<table width="500px">
				<tr>
					<td>Name</td>
					<td> :<?=$_SESSION['user']['username']?></td>
                    <td rowspan="4"><img src="blank-picture-holder.png" alt="profile pic" style="width:100px;height:100px;"align="Left"><br><a href="Change Profile Picture.php">Change</a></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                
				<tr>
					<td>Email</td>
					<td> :<?=$_SESSION['user']['email']?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Gender</td>
					<td> :<?=$_SESSION['user']['gender']?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Date of Birth</td>
					<td> :<?=$_SESSION['user']['dob1']?>/<?=$_SESSION['user']['dob2']?>/<?=$_SESSION['user']['dob3']?></td>
				</tr>
                <tr>
                   <td colspan="3"><hr></td> 
                </tr>

                <tr>
					<td><a href="Edit Profile.php">Edit Profile</a></td>
				</tr>	

			</table>
            </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <center>
                    Copyright © 2017
                    </center>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>