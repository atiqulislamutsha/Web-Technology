<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Currency Converter Action</title>
</head>

 <style type="text/css">
 	body{
       
       background-color: lightskyblue;

 	}
 </style>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
		
	<h1> DEBIT MONEY OR CREDIT MONEY</h1>

	<fieldset>
			<legend><h2>BALANCE:</h2></legend>

			<?php 
				if ($_SERVER['REQUEST_METHOD'] === "POST") {
					function test($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}

					#Basic Information
					$amount = test($_POST['amount']);
					$option = test($_POST['option']);

					#Error Messages
					if (empty($amount)) 
					{
						$message = "Error: Value cannot be empty";
						echo "<script type='text/javascript'>alert('$message');</script>";				
					}
				
					else 
					{
						if($option === "DEBIT")
						{
							$newamount = $amount + 10000;
							echo $amount." Tk, after debit = "." $".$newamount;
							echo "<br><br>";
							
						}

						else if($option === "CREDIT")
						{
							$newamount = $amount - 10000;
							echo " $".$amount."Taka,after credit = ".$newamount."tk";
							echo "<br><br>";
							
						}

						else
						{
							$message = "Error: Please select The money ";
							echo "<script type='text/javascript'>alert('$message');</script>";		
						}
					
					}
				}

			?>
	<a href="BALANCE.php">Go Back</a>		
	</fieldset>

</body>
</html>