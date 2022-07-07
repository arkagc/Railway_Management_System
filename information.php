<html>

	<head>
		
		<title>Train Information</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="icon" href="image/favicon1.png">
		<style>
.nav{
	top: 100px;
	bottom: 30px;
	position: absolute;
	width: 930px;
	border: 2px solid blue;
	padding: 100px 0px;
	margin-left: 220px;
	border-radius: 10px;
	
}
.nav h1{
	margin-top: -90px;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
}
.navg {
	text-align: center;
	margin-left: 20px;
	margin-right: 20px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 40px;
}

.footer-bottom{
	width: 100%;
	height: auto;
	position: relative;
	padding: 5px;
	background: blue;
	top: 575px;
	}
.footer-bottom{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: #fff;
	font-weight: 600;
	letter-spacing: 2px;
	}


		</style>
	</head>
		<body>

			<div class="wrapper">
			<div class="header">
				<div class="row">
					<div class="logo">
						<img src="image/railway_logo_3.png">
						<h1><i><u>RAILWAYS PASSENGERS</u></i></h1>
						<h2><i><u>RESERVATION SYSTEM</u></i></h2>
					</div>
					<ul class="main-nav">
						<li class="active"><a href="index.php"> Home </a><li>
						<li><a href="pnr.php"> PNR-Status </a><li>
						<li><a href="seat.php"> Seat Availability </a><li>
						<li><a href="fare.php"> Fare-Enquiry</a><li>
						<li><a href="reservationshow.php"> Internet Reservation </a><li>
					</ul>
				</div>
			</div>
			 <div class="sidenav">
						<h2>Services:</h2></br>
						<a href="station details.php">About Station Details </a>
						<a href="train_details.php">Train Details</a>
						<a href="station code.php">View Stations Code</a>
						<a href="sms_service.php">SMS Service</a>
						<a href="rules.php">Rules</a>
					</div>
					<br><br>
		<br><br>
		<br><br>
		<br><br>
		
		
		<div class="nav10">
						<img src="image/paytm.jpg" align="right" height="590" width="370">
			</div>
					
					<br><br>
		
		<form>
			<div class="nav">
				<h1><u>Train Information</u></h1></br>
				<?php 
				
					$source_station=$_POST["t3"];
					$destination_station=$_POST["t4"];
						echo '<br>';
						$con=mysql_connect("localhost","root","");
						if(!$con)
							{
								die('Unable to connect: '.mysql_error());
							} 
						mysql_select_db("railway",$con);
					//	$sql="SELECT * FROM reservation WHERE pnr='$_POST[pnr]'";
						$x=mysql_query("select * from train_details where source_station='".$source_station."' and destination_station='".$destination_station."'");
						if($x === false)
						{
							die(mysql_error());
						}
				?>
				<table class="navg" border="1">
					<tr>
					<td>Train No</td>
					<td>Train Name</td>
					<td>Source station name</td>
					<td>Destination station name</td>
					<td>Journey date</td>
					<td>Arrival time</td>
					<td>Departure time</td>
					</tr>
				<?php
					while($row=mysql_fetch_array($x))
					{
				?>
						<tr>
						<td><?php echo $row['train_no']; ?></td>
						<td><?php echo $row['train_name']; ?></td>
						<td><?php echo $row['source_station']; ?></td>
						<td><?php echo $row['destination_station']; ?></td>
						<td><?php echo $row['journey_date']; ?></td>
						<td><?php echo $row['arrival_time']; ?></td>
						<td><?php echo $row['dept_time']; ?></td>
						</tr>
				<?php		
					}
				?>
				</table>
			</div>
		</form>
		
			<div class="footer-bottom">
				
				<p><span style="padding-left:420px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
			
	</body>
</html>