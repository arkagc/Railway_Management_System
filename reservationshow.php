<html>
	<head>
		<title>Reservation-Details</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/submit_button.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="icon" href="image/favicon1.png">
		<style>
.navigation{
	
	top: 105px;
	bottom: 30px;
	position: absolute;
	width: 980px;
	height: 450px;
	border: 2px solid blue;
	padding: 100px 0px;
	margin-left: 220px;
	border-radius: 10px;
	
}
.navigation h1 {
	margin-top: -90px;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: blue;
}
.navig {
	text-align: center;
	margin-left: 290px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 20px;
}
.navigation h2 {
	margin-top: 30px;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: blue;
}
.tab {
	border-color: blue;
	width: 380px;
	margin-left: 290px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 20px;
}

.tab2 {
	border-color: blue;
	width: 380px;
	margin-left: 290px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 20px;
}


.navigation h3 {
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: blue;
}
.footer-bottom{
	width:1500px;
	height: auto;
	position: relative;
	padding: 5px;
	background: blue;
	top:30px;
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
	<?php
	//include ("db_connect.php");
	
	$train_no=$_POST['t1'];
	//$train_name=$_POST['t2'];
	$source_station=$_POST['t3'];
	$destination_station=$_POST['t4'];
	$journey_date=$_POST['t5'];
	$class=$_POST['t6'];
	$passenger_name=$_POST['t7'];
	$gender=$_POST['t8'];
	$age=$_POST['t9'];
	$phone_no=$_POST['t10'];
	$email=$_POST['t11'];
//	$fare=$_POST['t12'];
	
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
	
	if ($class=="First AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60 )
				{
                $s = mysql_query("select first_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="Second AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60)
				{
                $s = mysql_query("select second_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="Third AC")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and  destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60)
				{
                $s = mysql_query("select third_ac_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='SENIOR CITIZEN'");
				}
    }
	if ($class=="Sleeper")
	{
	    if ($age >= 5 && $age <= 11)
				{
                $s = mysql_query("select sleeper_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='CHILD[5-11]'");
				}
            elseif($age >11 && $age <60)
				{
                $s = mysql_query("select sleeper_fare from fare where train_no='".$train_no."' and source_station='".$source_station."' and destination_station='".$destination_station."' and age_status='ADULT[12 AND ABOVE]'");
				}
            elseif($age>=60)
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
		if($class=="First AC")
			$fare=$row['first_ac_fare'];
		elseif($class=="Second AC")
			$fare=$row['second_ac_fare'];
		elseif($class=="Third AC")
			$fare=$row['third_ac_fare'];
		elseif($class=="Sleeper")
			$fare=$row['sleeper_fare'];
	} 
	if ($class=="First AC")
		{
		$s = mysql_query("select dept_time,first_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		elseif($class=="Second AC")
		{
		$s = mysql_query("select dept_time,second_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		elseif($class=="Third AC")
		{
		$s = mysql_query("select dept_time,third_ac from train_details where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");  
		}
		elseif($class=="Sleeper")
		{
		$s = mysql_query("select dept_time,sleeper from train_details where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		
	if($row=mysql_fetch_array($s))
	{
		if($class=="First AC")
		{
			$seat=$row['first_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="Second AC")
		{
			$seat=$row['second_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="Third AC")
		{
			$seat=$row['third_ac'];
			$time=$row['dept_time'];
		}
		else if($class=="Sleeper")
		{
			$seat=$row['sleeper'];
			$time=$row['dept_time'];
		}
	}
		if($seat>0)
		{
			$x=mysql_query("select * from reservation");
			$pnr=0;
			$no=0;
			while($row=mysql_fetch_array($x))
			{
				$pnr=$pnr+1;
			}
			$pnr=$pnr+1;
			$n=mysql_query("select seat_no from reservation where train_no='".$train_no."'");
			while($row2=mysql_fetch_array($n))
			{
				$no=$no+1;
			}
			$no=$no+1;
			
			$sqlquery="Insert into reservation(train_no,train_name,source_station,destination_station,journey_date,class,passenger_name,gender,age,phone_no,email,pnr,seat_no) values('$train_no','$train_name','$source_station','$destination_station','$journey_date','$class','$passenger_name','$gender','$age','$phone_no','$email','$pnr','$no')";
			if(!mysql_query($sqlquery,$con))
			{
				die('Error:'.mysql_error());
			}
			echo 'One record updated';
			
			$seat=$seat-1;
			
			if($class=="First AC")
			{
				mysql_query("update train_details set first_ac=".$seat." where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
			}
			else if($class=="Second AC")
			{
				mysql_query("update train_details set second_ac=".$seat." where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
			}
		else if($class=="Third AC")
		{
			mysql_query("update train_details set third_ac=".$seat." where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
		}
		else if($class=="Sleeper")
		{
			mysql_query("update train_details set sleeper=".$seat." where train_no='".$train_no."' and journey_date='".$journey_date."' and source_station='".$source_station."' and destination_station='".$destination_station."'");
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
						<a href="">Train Details</a>
						<a href="station code.php">View Stations Code</a>
						<a href="">SMS Service</a>
						<a href="rules.php">Rules</a>
					</div>	


		<br><br>
		<br><br>
		<br><br>
		<br><br>
		
		
		<div >
						<span style="padding-left:1200px"><img src="image/paytm.jpg" height="600" width="330">
			</div>
		
		<div class="footer-bottom">
				
				<p><span style="padding-left:210px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
						
		<form name="f4" action="reservationconfirm.php" method="post">
			<div class="navigation">
						<h1><u>YOUR TRAIN DETAILS</u></h1>
					<table border="1" class="navig" bordercolor="blue">

					<tr>
					<td><font color="blue">Train No</font></td>
					<td><input type="text" name="t1" id="t1" value="<?php echo $train_no; ?>" ></td>
					</tr>
					<tr>
					<td><font color="blue">Train Name</font></td>
					<td><input type="text" name="t2"  value="<?php echo $train_name; ?>"></td>
					</tr>
					<tr>
					<td><font color="blue">Source Station Name</font></td>
					<td>
					
							<input type="text" name="t3"  value="<?php echo $source_station; ?>">
					
					
								</td>
					</tr>
					<tr>
					<td><font color="blue">Destination Station Name</font></td>
					<td>
					
					
								<input type="text" name="t4"  value="<?php echo $destination_station; ?>">
					
					
								</td>
					</tr>
					<tr>
					<td><font color="blue">Journey Date</font></td>
					<td><input type="text" name="t5" value="<?php echo $journey_date; ?>"></td>
					</tr>
					</table>
					<h2><u>YOUR BOOKING DETAILS</u></h2>
					<table border="1" class="tab">
					<tr>
						<td><font color="blue">Class  :</font></td>
						<td>   
						
								<input type="text" name="t6" value="<?php echo $class; ?>">
						
						
						</td>
					</tr>
					<tr>
					<td><font color="blue">Passenger Name :</font></td>
					<td><input type="text" name="t7" value="<?php echo $passenger_name; ?>"> </td>
					</tr>
					<tr>
					<td><font color="blue">Gender  :</font></td>
					<td><input type="text" name="t8" value="<?php echo $gender; ?>"></td>
					</tr>
					<tr>
					<td><font color="blue">Age   :</font></td>
					<td><input type="text" name="t9" value="<?php echo $age; ?>"></td>
					</tr>
					<tr>
					<td><font color="blue">Phone No  :</font></td>
					<td><input type="text" name="t10" value="<?php echo $phone_no; ?>"></td>
					</tr>
					<tr>
					<td><font color="blue">Passenger Email Id :</font></td>
					<td><input type="text" name="t11" value="<?php echo $email; ?>"></td>
					</tr>
					</table>
					<br>
					<h3><u>YOUR FARE DETAILS</u></h3></br>
					<table border="1" class="tab2" bordercolor="blue">

					<tr>
					<td><font color="blue">Fare Amount</font></td>
					<td><input type="text" name="t12" id="t12" value="<?php echo $fare; ?>" ></td>
					</tr>
					
					<tr>
					<td><font color="blue">PNR NUMBER</font></td>
					<td><input type="text" name="t13" id="t13" value="<?php echo $pnr; ?>" ></td>
					</tr>
					
					<tr>
					<td><font color="blue">Seat Number</font></td>
					<td><input type="text" name="t14" id="t14" value="<?php echo $no; ?>" ></td>
					</tr>
					
					
					
					
					
					
					</table>
					<div class="niv">
					
						<center><input type="submit" value="procced" name="submit_res"></center>
					</div>
		</form>
		
		
	</body>	
</html>	