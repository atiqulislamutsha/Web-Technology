<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Currency Converter</title>
	<style type="text/css">
		
    body{
          background-color: lightskyblue ;

    }

	</style>
</head>
<body>

	<h1>DEBIT OR CREDIT MOENEY</h1>

	<form id="Converter" name="Converter" action="ConvertBANLANCE.php" method="post" novalidate enctype="application/x-www-form-urlencoded">

		<!-- Currency Conversion -->
		<fieldset>
			<legend><h2>BANLANCE :</h2></legend>

			<!-- Amount -->
			<label for="amount">Enter BANLANCE value:</label>
			<input type="value" name="amount" id="amount" placeholder="Please enter your amount."value="" size="50" required>
			<br><br>

			<!-- Religion -->
			<label for="option">Options:</label>
			<select name="option" id="option" enabled>
				<option value="None">None</option>
				<option value="DEBIT">DEBIT money</option>
				<option value="CREDIT">CREDIT money</option>

			</select>

			<br><br>
			<input type="Submit">
			<button>Cancel</button>
			<br><br>
			<a href="eDashBANKING.php">| Dashboard |</a> 

		</fieldset>

	</form>

</body>
</html>