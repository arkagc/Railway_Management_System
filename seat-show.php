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
	width: 930px;
	border: 2px solid blue;
	padding: 100px 0px;
	margin-left: 230px;
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
	margin-left: 110px;
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
	width:1520px;
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
						<a href="train_details.php">Train Details</a>
						<a href="station code.php">View Stations Code</a>
						<a href="sms_service.php">SMS Service</a>
						<a href="rules.php">Rules</a>
					</div>
					
					<br><br>
		<br><br>
		<br><br>
		<br><br>
		
		
		<div >
						<span style="padding-left:1160px"><img src="image/paytm.jpg" height="590" width="370">
			</div>
					<div class="navigation4" action="">
							<h1><u>YOUR SEAT AVAILABILITY</u></h1></br>
							<?php 
	$train_no=$_POST['t1'];
	$journey_date=$_POST['t2'];
	$class=$_POST['d1'];
echo '<br>';
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Unable to connect: '.mysql_error());
	} 
	mysql_select_db("railway",$con);
	if($class=="First AC")
	{
		$x=mysql_query("select train_no,journey_date,source_station,destination_station,train_name,first_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."'");
		$f=1;
	}
	else if($class=="Second AC")
	{
		$x=mysql_query("select train_no,journey_date,source_station,destination_station,train_name,second_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."'");
		$f=2;
	}
	else if($class=="Third AC")
	{
		$x=mysql_query("select train_no,journey_date,source_station,destination_station,train_name,third_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."'");
		$f=3;
	}
	else if($class=="Sleeper")
	{
		$x=mysql_query("select train_no,journey_date,source_station,destination_station,train_name,sleeper from train_details where train_no='".$train_no."' and journey_date='".$journey_date."'");
		$f=4;
	}
	
	
	
	
	
	
	
	echo "<table border='2' class='view'>
			<tr>
	<th>Train No</th>
	<th>Journey Date</th>
	<th>Source Station</th>
	<th>Destination</th>
	<th>Train Name</th>
	<th>Seat Available</th>
	</tr>";
	while($row=mysql_fetch_array($x))
	{
		echo "<tr>";
		echo "<td>".$row['train_no']."</td>";
		echo "<td>".$row['journey_date']."</td>";
		echo "<td>".$row['source_station']."</td>";
		echo "<td>".$row['destination_station']."</td>";
		echo "<td>".$row['train_name']."</td>";
		if($f==1)
			echo "<td>".$row['first_ac']."</td>";
		else if($f==2)
			echo "<td>".$row['second_ac']."</td>";
		else if($f==3)
			echo "<td>".$row['third_ac']."</td>";
		else if($f==4)
			echo "<td>".$row['sleeper']."</td>";
		
		
		echo "</tr>";
		
	}
	
		echo "</table>";
		mysql_close($con);
	?>
	
	<p><button><a href="index.php">HOME</a></button></p>
			</div>	
				<div class="footer-bottom">
				
				<p><span style="padding-left:120px">Designed by: Arka Ghosh Chowdhury</p>
			</div>			
								
			</body>
</html>