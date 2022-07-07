<html>

	<head>
		
		<title>Seat_Availability</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/seat_form.css">
		<link rel="icon" href="image/favicon1.png">
		
		<script type="text/Javascript">
		function validate()
		{
			
			//trainno
			var tno=document.getElementById("train").value;
			if(tno=="")
			{
				alert("Train number cannot be blank");
				return false;
			}
			
			
			var tno=document.getElementById("train").value;
			if(isNaN(tno))
			{
			alert("Train number must be in numbers, not in characters");
			return false;
			}
			
			
			//date
			var date=document.getElementById("journey").value;
			if(date=="")
			{
				alert("Please insert a date");
				return false;
			}
			
			//class
			var e = document.getElementById("class");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select a class");
				return false;
			}
		}
	</script>
	
				<style>
			
.footer-bottom{
	width:1500px;
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
						<span style="padding-left:1150px"><img src="image/paytm.jpg" height="590" width="370">
			</div>
				<form name="f3" action="seat-show.php" method="post" onsubmit="return validate()"> 
				  <div class="nav2">
					
							<h1><u>Seat_Availability</u></h1></br>
							<h2><i><u>Accommodation Availability Enquiry On Train Till Departure</u></i></h2>
				  
							<p><font color="blue">Train No  &nbsp;:</font>
							<input type="text" name="t1" id="train" placeholder="Enter train no"></br></br>
							<font color="blue">Journey date :</font>
							<input type="date" id="journey" name="t2"></p>
							<p><font color="blue"/>Class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
							<select class="codes" id="class" name="d1">
								<option value="0">--SELECT--</option>
								<option>First AC</option>
								<option>Second AC</option>
								<option>Third AC</option>
								<option>Sleeper</option>
							</select></p>
							
							<p><button><font color="blue"><b>Get Availability</b></font></button></p>
							
				  </div>
				</form>
				<div class="footer-bottom">
				
				<p><span style="padding-left:210px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
		</body>
</html>