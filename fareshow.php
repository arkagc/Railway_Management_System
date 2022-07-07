<html>
	<head>
		<title>FARE-ENQUIRY DETAILS</title>
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
	margin-left: 80px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 40px;
}
		</style>
	</head>
	<body>
   
		<?php 
			$train_no=$_POST['t1'];
			$source_station=$_POST['d1'];
			$destination_station=$_POST['d2'];
			$class=$_POST['d3'];
			$age=$_POST['d4'];
echo '<br>';
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Unable to connect:'.mysql_error());
	}
	mysql_select_db("railway",$con);
		
	$x=mysql_query("select train_name from train_details where train_no='".$train_no."'");
	if($row=mysql_fetch_array($x))
	{
		$train_name=$row['train_name'];
	}
	
	if ($class=="FIRST AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60 && $age =="SENIOR CITIZEN")
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="SECOND AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60 && $age =="SENIOR CITIZEN")
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="THIRD AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and  destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60 && $age =="SENIOR CITIZEN")
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="SLEEPER")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select sleeper_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select sleeper_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60 && $age =="SENIOR CITIZEN")
				{
                $s = mysql_query("select sleeper_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
	}
	if($s === FALSE)
	{
		die(mysql_error());
	}
	
	if($row=mysql_fetch_array($s))
	{
		if($class=="FIRST AC")
			$fare=$row['first_ac_fare'];
		elseif($class=="SECOND AC")
			$fare=$row['second_ac_fare'];
		elseif($class=="THIRD AC")
			$fare=$row['third_ac_fare'];
		elseif($class=="SPEEPER")
			$fare=$row['sleeper_fare'];
	} 
	if ($class=="FIRST AC")
		{
		$s = mysql_query("select dept_time,first_ac from train_details where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		elseif($class=="SECOND AC")
		{
		$s = mysql_query("select dept_time,second_ac from train_details where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		elseif($class=="THIRD AC")
		{
		$s = mysql_query("select dept_time,third_ac from train_details where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."'");  
		}
		elseif($class=="SLEEPER")
		{
		$s = mysql_query("select dept_time,sleeper from train_details where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		
	if($row=mysql_fetch_array($s))
	{
		if($class=="FIRST AC")
		{
			$seat=$row['first_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="SECOND AC")
		{
			$seat=$row['second_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="THIRD AC")
		{
			$seat=$row['third_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="SLEEPER")
		{
			$seat=$row['sleeper'];
			$time=$row['dept_time'];
		}
	}
		
	?> 
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
						<div class="navigation4" action="">
							<h1><u>YOUR FARE DETAILS</u></h1></br>
							<table border="1" class="tab2" bordercolor="blue">

					<tr>
					<td><font color="blue">Fare Amount</font></td>
					<td><input type="text" name="t12" id="t12" value="<?php echo $fare; ?>" ></td>
					</tr>
					</table>
	
	<p><button><a href="index.php">HOME</a></button></p>
			</div>	
	</body>
</html>