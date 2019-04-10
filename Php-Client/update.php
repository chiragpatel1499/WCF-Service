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
  .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
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
  </style>
</head>

<body>
<?php 
session_start(); 

$_SESSION["eventid"]=$_GET["eventid"];

?>

    <div class="jumbotron text-center">
        <h4>REMINDER SERVICE -- UPDATE</h4>
        
    </div>
	<form class="form-inline" method="POST">
    <table>
        <tr>
            <td>
                <div align="center">
                    <h2><span class="label label-success"> DATE :</span></h2>
                </div>
            </td>
               
			   <td>
                    <div align="center">
                <div class="input-group">
                    <input type="date" class="form-control" size="20" placeholder="Enter Date" name="dateu" required></div>
                    </div>
            </td>
        </tr>
        
        <tr>
            <td>
                    <div align="center">
                <h2><span class="label label-success"> TIME :</span></h2>
                    </div>
            </td>
            <td>
                    <div align="center">
                <div class="input-group">
                    <input class="form-control" size="20" placeholder="Enter Time" name="timeu" required></div>
                    </div>
            </td>
        
        </tr>
    
        <tr>
            <td>
                    <div align="center">
                <h2><span class="label label-success" style="padding:10px"> EVENTTYPE :</span></h2>
            </div>
            </td>
            <td>
                    <div align="center">
                <div class="input-group">
                    <input class="form-control" size="20" placeholder="Enter EVENTTYPE" name="eventu" required></div>
                    </div>
            </td>
        </tr>
        <tr>
            <td>
                    <div align="center">
                <h2><span class="label label-success" style="padding:10px"> DESCRIPTION :</span></h2>
                </div>
            </td>
            <td>
                    <div align="center">
                <div class="input-group">
                    <input class="form-control" size="20" placeholder="Enter DESCRIPTION" name="desu" required></div>
                    </div>
            </td>
        </tr>
        <tr>
                
            <td style="padding:10px">
                    <div align="center">
                <form class="form-inline" action="">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-white" name="test" id="test">MAKE UPDATE</button>
                    </div>
                </form>
				<?php
			
			function search()
			{
				
				$client = new SoapClient('http://localhost:8080/Reminder?wsdl');
				$client->soap_defencoding = 'UTF-8';
				$udate=$_POST["dateu"];
				$utime=$_POST["timeu"];
				$uevent=$_POST["eventu"];
				$udes=$_POST["desu"];
				
				$data =array("UserId" => $_SESSION["userid"] , "date" => $udate ,"time" => $utime,"eventType" => $uevent,"description" => $udes , "eventId"=> $_SESSION["eventid"]);
				$client ->	updateReminder($data);
				echo 'description :'.$data['description'];
				header('Location:homepage.php?userid='.$_SESSION["userid"]);

				
			}	
			if(array_key_exists('test',$_POST)){
				search();
				}
			
		?>
            </div>

            </td>
        </tr>
    </table>
	</form>
	<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  
</div>
</body>

</html>