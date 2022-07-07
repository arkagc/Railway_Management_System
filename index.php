<html>
	<head>
		<title>Railway-Enquiry</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="icon" href="image/favicon1.png">
	<style>
			
.footer-bottom{
	text-align: left;
	width:1500px;
	height: auto;
	padding:2px;
	position: relative;
	background: blue;
	top: 980px;
	}
.footer-bottom{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: #fff;
	font-weight: 400;
	letter-spacing: 2px;
	}

			
			</style>
		
		<script type="text/Javascript">
		function validate()
		{
			
			//SourceStationCode
			var e = document.getElementById("ssc");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select your Source Station Code");
				return false;
			}
			
			//SourceStationName
			var e = document.getElementById("ssn");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select your Source Station Name");
				return false;
			}
			
			//DestinationStationCode
			var e = document.getElementById("dsc");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select your Destination Station Code");
				return false;
			}
			
			//DestinationStationName
			var e = document.getElementById("dsn");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select your Destination Station Name");
				return false;
			}
			
			//date
			var date=document.getElementById("date").value;
			if(date=="")
			{
				alert("Please insert your journey date");
				return false;
			}
		}
		</script>
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
					<div class="sidenav2">
						<h2><u>Experience Our Service</u></h2></br>
						<p>
							India has some of the most spectacular and unforgetable rail journey in the word.
							Here you experience a simple way to find out everything you need to know in one 
							easy place.There is no better way to enjoy India's outback cities,coastal towns and
							regional areas in comfort.
						</p>
					</div>
					<div class="sidenav3">
						<img src="image/rajdhani2.jpg">
					</div>
					<div class="sidenav4">
						<p><b>INDIAN RAILWAYS</b> is india's national railway system operated by the
						Ministry of Railways.It manages the fourth largest network in the world. IR runs more than
						13,000 passengers trains daily , on both long-distance and surbans routes from 7349 stations
						across the india.The trains have a five digit numbering system </p></br>
					</div>
					<div class="sidenav5">
					<h2><u>Enquiry-Section</u></h2>
					<form name="f1" action="information.php" method="post" onsubmit="return validate()">
						<p><font color="blue"/>Source Stations Code :
							<select class="codes" id="ssc">
								<option value="0">--SELECT--</option>
								<option>HWH</option>
								<option>CHE</option>
								<option>MUM</option>
								<option>DEL</option>
								<option>AGA</option>
								<option>KOL</option>
								<option>SDAH</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <font color="blue"/>Source Stations Name :
							<select class="names" id="ssn" name="t3">
								<option value="0">--SELECT--</option>
								<option>HOWRAH</option>
								<option>CHENNAI</option>
								<option>MUMBAI</option>
								<option>DELHI</option>
								<option>AGRA</option>
								<option>KOLKATA</option>
								<option>SEALDAH</option>
							</select></p></br>
						<p><font color="blue"/>Destination Stations code :
							 <select class="code2" id="dsc">
							 <option value="0">--SELECT--</option>
								<option>HWH</option>
								<option>CHE</option>
								<option>MUM</option>
								<option>DEL</option>
								<option>AGA</option>
								<option>KOL</option>
								<option>SDAH</option>
							</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<font color="blue"/>Destination Stations Name :
								<select class="code2" id="dsn" name="t4">
								<option value="0">--SELECT--</option>
								<option>HOWRAH</option>
								<option>CHENNAI</option>
								<option>MUMBAI</option>
								<option>DELHI</option>
								<option>AGRA</option>
								<option>KOLKATA</option>
								<option>SEALDAH</option>
							</select></p></br>
						<p><font color="blue"/>Journey Date :
						<input type="date" id="date" name="t5"></p>
						<p><button>GET ENQUIRY</button></p>
					</form>	
				
		  </div>
<div class="footer-bottom">
				
				<p>Designed by: Arka Ghosh Chowdhury</p>
			</div>					
					</div>		  
	</body>
</html>