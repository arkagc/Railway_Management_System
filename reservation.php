<html>
	<head>
		
		<title>Internet-Reservation</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/submit_button.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="icon" href="image/favicon1.png">
		<script type="text/Javascript">
		function validate()
		{
			//trainno
			var tno=document.getElementById("t1").value;
			if(tno=="")
			{
				alert("Train Number cannot be blank");
				return false;
			}
			
			
			var tno=document.getElementById("t1").value;
			if(isNaN(tno))
			{
			alert("Train Number must be in numbers, not in characters");
			return false;
			}
			
			//trainname
			var e = document.getElementById("t2");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select the Train Name");
				return false;
			} 
			
			
			
			
			
			//sourcestation
			var e = document.getElementById("t3");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select a source station");
				return false;
			} 
			
			
			//destinationstation
			var e = document.getElementById("t4");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select a destination station");
				return false;
			}
			
			//S_station and D_station must be same
			
			
			
			//date
			var date=document.getElementById("t5").value;
			if(date=="")
			{
				alert("Please insert a date");
				return false;
			}
			
			//class
			var e = document.getElementById("class_res");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select a class");
				return false;
			}
			
			//passengername
			var pname=document.getElementById("t7").value;
			if(pname=="")
			{
				alert("Passenger Name cannot be blank");
				return false;
			}
			
			var val = document.getElementById("t7").value;
    
			if (!val.match(/^[a-z A-Z]+$/)) 
			{
				alert("Use only alphabets in Passenger Name");
				return false;
			}
			
			//gender
			
			var e = document.getElementById("t8");
			var strUser = e.options[e.selectedIndex].value;

			var strUser1 = e.options[e.selectedIndex].text;
			if(strUser==0)
			{
				alert("Please select your Gender");
				return false;
			}
			
		
			
			
			
			
			
			
			
			//age
			var age=document.getElementById("t9").value;
			if(age=="")
			{
				alert("Age cannot be blank");
				return false;
			}
			
			
			var age=document.getElementById("t9").value;
			if(isNaN(age))
			{
			alert("Age must be in numbers, not in characters");
			return false;
			}
			
			//phoneno
			var cnumber_id=document.getElementById("t10").value;
			if(cnumber_id=="")
			{
				alert("Phone number cannot be blank");
				return false;
			}

			var cnumber_id=document.getElementById("t10").value;
			if(cnumber_id.length!=10)
			{
				alert("Phone number must be 10 digits");
				return false;
			}
		
			var cnumber_id=document.getElementById("t10").value;
			if(isNaN(cnumber_id))
			{
				alert("Phone number must be in numbers, not characters");
				return false;
			}
			
			//email
			var email=document.getElementById("t11").value;
			if(email=="")
			{
				alert("Email cannot be blank");
				return false;
			}
			
		}
		</script>
	<style>
	
	.navigation{
	
	top: 105px;
	bottom: 30px;
	position: absolute;
	width: 980px;
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
						<span style="padding-left:1200px"><img src="image/paytm.jpg" height="590" width="330">
			</div>
			<form action="reservationshow.php" method="post" name="f_res" onsubmit="return validate()">

				<div class="navigation">
						<h1><u>ENTER TRAIN DETAILS</u></h1></br>
					<table border="1" class="navig" bordercolor="blue">

					<tr>
					<td><font color="blue">Train No</font></td>
					<td><input type="text" class="names" id="t1" name="t1" ></input>
								
								
				</td>
					</tr>
					<tr>
					<td><font color="blue">Train Name</font></td>
					<td><select class="names" id="t2" name="t2" >
								<option value="0">--SELECT--</option>
								<option>RAJDHANI EXPRESSS</option>
								<option>DURONTO EXPRESS</option>
								<option>AGRA MAIL</option>
								<option>MUMBAI MAIL</option>
			
							</select></td>
					</tr>
					<tr>
					<td><font color="blue">Source Station Name</font></td>
					<td><select class="names" id="t3" name="t3">
								<option value="0">--SELECT--</option>
								<option value="1">HOWRAH</option>
								<option>CHENNAI</option>
								<option>MUMBAI</option>
								<option>DELHI</option>
								<option>AGRA</option>
								<option>KOLKATA</option>
								<option>SEALDAH</option>
							</select></td>
					</tr>
					<tr>
					<td><font color="blue">Destination Station Name</font></td>
					<td><select class="names" id="t4" name="t4">
								<option value="0">--SELECT--</option>
								<option value="1">HOWRAH</option>
								<option>CHENNAI</option>
								<option>MUMBAI</option>
								<option>DELHI</option>
								<option>AGRA</option>
								<option>KOLKATA</option>
								<option>SEALDAH</option>
							</select></td>
					</tr>
					<tr>
					<td><font color="blue">Journey Date</font></td>
					<td><input type="date" name="t5" id="t5" ></td>
					</tr>
					</table>
					<h2><u>ENTER BOOKING DETAILS</u></h2></br>
					<table border="1" class="tab">
					<tr>
						<td><font color="blue">Class  :</font></td>
						<td><select class="codes" id="class_res" name="t6">
								<option value="0">--SELECT--</option>
								<option>First AC</option>
								<option>Second AC</option>
								<option>Third AC</option>
								<option>Sleeper</option>
							</select></td>
					</tr>
					<tr>
					<td><font color="blue">Passenger Name :</font></td>
					<td><input type="text" id="t7" name="t7" placeholder="Enter Passenger Name"></td>
					</tr>
					<tr>
					<td><font color="blue">Gender  :</font></td>
					<td><select class="names" id="t8" name="t8" >
								<option value="0">--SELECT--</option>
								<option>Male</option>
								<option>Female</option>
								</select></td>
					</tr>
					<tr>
					<td><font color="blue">Age   :</font></td>
					<td><input type="text" id="t9" name="t9" placeholder="Enter Passenger Age"></td>
					</tr>
					<tr>
					<td><font color="blue">Phone No  :</font></td>
					<td><input type="text" id="t10" name="t10" placeholder="Enter Passenger Phone No"></td>
					</tr>
					<tr>
					<td><font color="blue">Passenger Email Id :</font></td>
					<td><input type="email" id="t11" name="t11" placeholder="Enter Passenger Email Id"></td>
					</tr>
					</table>
					<div class="niv">
						<center><input type="submit" value="submit" name="submit_res"></center>
					</div>		
				</div>
			</form>
			<div class="footer-bottom">
				
				<p><span style="padding-left:210px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
	</body>
</html>