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
                <h2>Sign Up</h2>
                <form method="POST">
                    <div class="form-group">
                            <label for="UserName">userid:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter userid" name="uid">
                    </div>
                    <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" palceholder="Enter password" name="pwd">
                    </div>
                    <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>  
                    
                  
                 
                 <h4>To login,....</h4>
                 <br>
                 <div>
                <input type="submit" name="test" id="test" value="Login" /><br/>
					</div>
                </form>
				<?php
			
			function register()
			{
				
				$client = new SoapClient('http://localhost:8080/Reminder?wsdl');
				$client->soap_defencoding = 'UTF-8';
				$userid=$_POST["uid"];
				$password=$_POST["pwd"];
				
				$email=$_POST["email"];
				$loginparam = array('userid'=>$userid,'password'=>$password,'email'=>$email);
				$client->registerUser($loginparam);
				header('Location:login.php');
			}
			if(array_key_exists('test',$_POST)){
				register();
				}
			
		?>
              </div>
              
</body>
</html>