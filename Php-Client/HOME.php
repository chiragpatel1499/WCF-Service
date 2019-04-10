<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: #f4511e;
    color: #333;
  }
  .bg-1 { 
    background-color: #1abc9c;
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d;
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff;
    color: #555555;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
.detail{
    text-size:50px;
}
  </style>
</head>
<body>
<div class="jumbotron text-center">
  <h4>REMINDER SERVICE</h4>  
  <form class="form-inline" method="POST">
    <div class="input-group">
      <input class="form-control" size="50" placeholder="Enter UserId" name="userid" required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-white" name="test" id="test">GET ALL REMINDERS</button>
      </div>
    </div>
  </form>
  <?php
			
			function search()
			{
				
				$client = new SoapClient('http://localhost:8080/Reminder?wsdl');
				$client->soap_defencoding = 'UTF-8';
				$userid=$_POST["userid"];
				
				
				header('Location:homepage.php?userid='.$userid);
			}
			if(array_key_exists('test',$_POST)){
				search();
				}
			
		?>
</div>

<div >
	<div class="container-fluid bg-3 text-center">    
  <h3>What is Reminder??</h3><br>
  <div class="row">
    <div class="col-sm-4"> 
      <img src="download.jpg" alt="Image" width="350" height="300">
    </div>
	<div class="detail">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
  </div>
</div>
	
</div>

<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  
</div>

</body>

</html>
