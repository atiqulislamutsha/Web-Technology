<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="post" action="../controller/RegistrationCheck.php">
			<center>
    <table border="1" width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>XCompany</b></h3>
            </td>

            <td align="Right">
                <a href="../index.php">Home</a> |
                <a href="Login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>

        
        <tr>
            <td colspan="2">
			<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm password"></td>
				
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
				
                <tr>
                    <td colspan="2">
					<fieldset>
					<legend>Gender</legend>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other
                    </fieldset>
					<hr>
					</td>
                </tr>

				<tr>
                    <td colspan="2">
					<fieldset>
					<legend>Date of Birth</legend>
                    <input type="number" name="dob1" value="" min="1" max="31"> <b> / </b>
                    <input type="number" name="dob2" value="" min="1" max="12"> <b> / </b>
                    <input type="number" name="dob3" value="" min="1500" max="3500"> (dd/mm/yyy)
                    </fieldset>
					<hr>
					</td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
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
		
	</form>
</body>
</html>