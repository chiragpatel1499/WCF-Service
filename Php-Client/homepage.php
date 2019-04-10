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
  }.bg-1 { 
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
$client=new SoapClient('http://localhost:8080/Reminder?wsdl');
$userid=$_GET["userid"];
$_SESSION["userid"]=$userid;
$data=array("UserId" => $_SESSION["userid"] );
$data=$client->getAllReminders($data);
//echo var_dump($data);
$rd = $data -> getAllRemindersResult -> ReminderDetail;


?>
<div class="jumbotron text-center">
  <h4>REMINDER SERVICE</h4>  
<?php
  echo '<button type="button" class="btn btn-white"><a href="insert.php?userid='.$_SESSION["userid"] .'">INSERT</a></button>';
     ?> 
</div>
<div>
<div class="container">
<table class="table">
    <thead>
      <tr>
		
        <th>DATE</th>
        <th>TIME</th>
        <th>EVENT-TYPE</th>
		<th>DESCRIPTION</th>
		<th>EVENTID</th>
		<th></th>
      </tr>
    </thead>
	<tbody>
	<?php
		for($row=0;$row<sizeof($rd);$row++)
		{
			$data=$rd[$row];
			$date=date_create($data->Date);
			
			echo '<tr>';
			
			echo '<td>' . date_format($date,"d/m/Y"). '</td>';
			echo '<td>' . $data -> Time . '</td>';
			echo '<td>' . $data -> EventType . '</td>';
			echo '<td>' . $data -> Description . '</td>';
			echo '<td>' . $data -> EventId . '</td>';
			echo '<td><button type="button" class="btn btn-white"><a href="update.php?eventid='.$data -> EventId .'">UPDATE</a></button></td>';
			echo '<td><button type="button" class="btn btn-white"><a href="delete.php?eventid='.$data -> EventId .'">DELETE</a></button></td>';
			echo '</tr>';
		}
	
	?>
	</tbody>
  </table>
</div>

</div>

<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>

</body>
</html>
