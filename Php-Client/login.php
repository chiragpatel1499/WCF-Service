<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bloggers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form method="POST">
    <div class="form-group">
      <label for="email">userid:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter userid" name="uid">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <div>
                <input type="submit" name="test" id="test" value="Login" /><br/>
	</div>
  </form>
  <?php
			
			function login()
			{
				
				$client = new SoapClient('http://localhost:8080/Reminder?wsdl');
				$client->soap_defencoding = 'UTF-8';
				$userid=$_POST["uid"];
				$password=$_POST["pwd"];
				
				$loginparam = array('userid'=>$userid,'password'=>$password);
				$bl=$client->authenticate($loginparam);
				
				if($bl -> authenticateResult ==true)
				{
					session_start(); 
  
					$_SESSION["userid"] = $userid;
					header('Location:HOME.php');
				}
				else
				{
					echo "Enter valid credentials";
					header('Location:login.php');	
				}
				
			}
			if(array_key_exists('test',$_POST)){
				login();
				}
			
		?>
 
 <br>

  <a href="signup.php">signup</a>
</div>

</body>
</html>
