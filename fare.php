<html>
	<head>
		
		<title>FARE ENQUIRY</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/submit_button.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="stylesheet" type="text/css" href="css/click.css">
		
		<link rel="icon" href="image/favicon1.png">
		
		
		<script type="text/Javascript">
		function validate()
		{
			
			//trainno
			var e = document.getElementById("tno");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select train number");
				return false;
			}
			
			
			
			//SourceStation
			var e = document.getElementById("sstation");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select source station");
				return false;
			}
			
			//trainno
			var e = document.getElementById("dstation");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select destination station");
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
			
			//age
			var age=document.getElementById("age").value;
			if(age=="")
			{
				alert("Age cannot be blank");
				return false;
			}
			
			
			var age=document.getElementById("age").value;
			if(isNaN(age))
			{
			alert("Age must be in numbers, not in characters");
			return false;
			}
			
			
			
		}
			</script>
			<style>
.navigation1{
	
	top: 105px;
	bottom: 30px;
	position: absolute;
	width: 930px;
	border: 2px solid blue;
	padding: 100px 0px;
	margin-left: 220px;
	border-radius: 10px;
	
}
.navigation1 h1 {
	margin-top: -90px;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	margin-left: 10px;
	color: blue;
}
.navig1 {
	text-align: center;
	margin-left: 330px;
	font-size: 15px;
	font-weight: bold;
	margin-top: 40px;
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
						<li><a href=""> PNR-Status </a><li>
						<li><a href="seat.php"> Seat Availability </a><li>
						<li><a href=""> Fare-Enquiry</a><li>
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
			<form action="" onsubmit="return validate()" method="post">
		<div class="navigation1" >
				<h1><u>FARE  ENQUIRY</u></h1></br>
		<table class="navig1" border="1" bordercolor="blue" width="300" height="100">
		 <tr>
			
			<td><font color="blue"/>Train Name</td>
			<td><font color="blue"/>SELECT</td>
		</tr>
		<tr>
			<td>Rajdhani Express</td>
			<td><input type="button" onclick="window.location.href='fare_info_rajdhani.php'" value="Click" id="rajdani"></td>
			
		</tr>
		<tr>
			<td>Duronto Express</td>
			<td><input type="button" onclick="window.location.href='fare_info_duronto.php'" value="Click"></td>
			
		</tr>
		<tr>
			<td>Mumbai Mail</td>
			<td><input type="button" onclick="window.location.href='fare_info_mumbaimail.php'" value="Click"></td>
			
		</tr>
		<tr>
			<td>Agra Mail</td>
			<td><input type="button" onclick="window.location.href='fare_info_agramail.php'" value="Click"></td>
			
		</tr>
			
				</table><br>
					
			
			<center><p><button><a href="index.php">HOME</a></button></p></center>
			</div>
		</form>	
		<div class="footer-bottom">
				
				<p><span style="padding-left:110px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
		
	</body>	
</html>			