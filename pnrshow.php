<html>
	<head>
		<title>PNR-STATUS DETAILS</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="icon" href="image/favicon1.png">
		<style>
.navigation4 {			
	top: 105px;
	bottom: 30px;
	position: absolute;
	width: 1000px;
	border: 2px solid blue;
	padding: 100px 0px;
	margin-left: 220px;
	border-radius: 10px;
	
}
.navigation4 h1 {
	margin-top: -90px;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: blue;
}
.view {
	text-align: center;
	margin-left: 30px;
	margin-right: 30px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 40px;
}
.navigation4 p button {
	
	margin-left: 460px;
	margin-top: 20px;
	font-size: 17px;
	font-weight: bold;
	color: blue;
}

.footer-bottom{

	width:1510px;
	height: auto;
	position: relative;
	padding: 5px;
	background: blue;
	top: 20px;
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
						<li><a href="reservation.php"> Internet Reservation </a><li>
					</ul>
				</div>
		   </div>
				    <div class="sidenav">
						<h2>Services:</h2></br>
						<a href="station details.php">About Station Details </a>
						<a href="#">Train Details</a>
						<a href="station code.php">View Stations Code</a>
						<a href="#">SMS Service</a>
						<a href="rules.php">Rules</a>
					</div>
					
					<br><br>
		<br><br>
		<br><br>
		<br><br>
		
		
		<div >
						<span style="padding-left:1220px"><img src="image/paytm.jpg" height="590" width="300">
			</div>
					<div class="navigation4" action="">
							<h1><u>YOUR PNR-STATUS</u></h1></br> 
							
					
					
					
					<?php
						$pnr=$_POST['t1'];
						
						echo '<br>';
						$con=mysql_connect("localhost","root","");
						if(!$con)
							{
								die('Unable to connect: '.mysql_error());
							} 
						mysql_select_db("railway",$con);
						$x=mysql_query("select * from reservation where pnr='".$pnr."'");
						if($x === false)
						{
							die(mysql_error());
						}
					?>
					 <table border='2' class="view" bordercolor="blue">
						<tr>
						<th>Pnr</th>
						<th>Train No.</th>
						<th>Passenger Name</th>
					<!--	<th>Status</th>  -->
						<th>Origin</th>
						<th>Destination</th>
						<th>Sex</th>
						<th>Age</th>
						<th>Journet date</th>
						<th>Class</th>
						<th>Seat No.</th>
						<th>Email</th>
						<th>Phone</th>
						</tr>
					<?php
						while($row=mysql_fetch_array($x))
						{
				    ?>
							<tr>
							<td><?php echo $row['pnr']; ?></td>
							<td><?php echo $row['train_no']; ?></td>
							<td><?php echo $row['passenger_name']; ?></td>
						<!--	<td><?php //echo $row['status']; ?></td> -->
							<td><?php echo $row['source_station']; ?></td>
							<td><?php echo $row['destination_station']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['journey_date']; ?></td>
							<td><?php echo $row['class']; ?></td>
							<td><?php echo $row['seat_no']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['phone_no']; ?></td>
							</tr>
					<?php		
						}
					?>
						</table>
					<?php mysql_close($con); ?>

					<p><button><a href="index.php">HOME</a></button></p>
			</div>	
			<div class="footer-bottom">
				
				<p><span style="padding-left:50px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
		</body>
</html>