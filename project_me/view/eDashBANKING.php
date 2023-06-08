<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> BANKING</title>
    <style>

div{

    text-decoration-color: white  ;
}
.button {
      
  
  background-color: lightskyblue;
  border: none;
  color: white;
  padding: 30px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
}
body{

    text-align: center;
    background-image: url("emplyoee.jpg");
}
h1{
    font-size: 30px;
}



</style>
</head>
<body>
   <form method="get" action="../view/BALANCE.php">
     <button class="button" type="submit">BALANCE</button>
     </form>
     <form method="get" action="../controller/eSalaryControl.php">
     <button class="button" type="submit">SALARY</button>
     </form>
     <form method="get" action="../model/eINFO.php">
     <button class="button" type="submit">TRANSACTION</button>
     </form>
     <form method="get" action="../model/eJOB.php">
     <button class="button" type="submit">CREDIT-MONEY</button>
     </form>
     <form method="get" action="../model/eJOB.php">
     <button class="button" type="submit">DEBIT-MONEY</button>
     </form>
     <a href="eDashboard.php">| Dashboard |</a> 

</body>
</html>