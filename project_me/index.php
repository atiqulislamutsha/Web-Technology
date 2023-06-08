
<!DOCTYPE html>

<html lang="en">
<style>
    body {
     background-image: url("emplyoee.jpg");
     background-repeat: no-repeat, repeat;
     background-color: #cccccc;
    }
	title{
        color:  white;
        text-align: center;
        background-color: lightblue;

	}
	header
	{
		  color:  white;
        text-align: center;
        background-color: lightblue;
        padding: 10px;
	}
    
    h1{
           text-align: center;
           position: relative;
           animation-name: example;
           animation-duration: 3s;
           animation-iteration-count: 20;
           animation-direction: alternate; 
    }
    @keyframes example {
  0%   {background-color:white; right:0px; top:10px;}
  10%  {background-color:lightsalmon; left:0px; top:20px;}
  20%  {background-color:white; left:0px; top:30px;}
  30%  {background-color:lightsalmon; left:0px; top:40px;}
  40%  {background-color:white; left:0px; top:50px;}
  
}
    a{

          font-size: 30px 
    }
.bottomright {
       color:  ghostwhite;
       position: absolute;
       bottom: 8px;
       right: 16px;
       font-size: 18px;
    
        }

</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home |</a>
            <?php if(isset($_SESSION['key'])){
                echo'<a  href="view/eLogout.php">| Logout |</a> ';
                echo'<a href="view/eDashboard.php">| Dashboard |</a>';
            }
            else{
                echo '<a href="view/eLogin.php">| Login |</a> ';
                echo '<a href="view/eRegistration.php">| Registration |</a>';
                
            } ?>
        </nav>
    </header>

    <section>
        <h1>HANDYMAN SERVICE</h1>
        <h1>ADMIN PANEL</h1>
    </section>

    <footer class="bottomright"  >
        All rights are reserved
    </footer>
</body>
</html>