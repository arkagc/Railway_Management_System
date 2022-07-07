<html>
	<head>
		
		<title>PNR STATUS</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="stylesheet" type="text/css" href="css/pnr_form.css">
		<link rel="icon" href="image/favicon1.png">
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
		
		<script type="text/Javascript">
		function validate()
		{
			
			//pnrno
			var pnrno=document.getElementById("pnr").value;
			if(pnrno=="")
			{
				alert("PNR number cannot be blank");
				return false;
			}
			
			
			var pnrno=document.getElementById("pnr").value;
			if(isNaN(pnrno))
			{
			alert("PNR number must be in numbers, not in characters");
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
					
					<br><br>
		<br><br>
		<br><br>
		<br><br>
		
		
		<div >
						<span style="padding-left:1160px"><img src="image/paytm.jpg" height="590" width="370">
			</div>
		<form name="f1" method="post" action="pnrshow.php"  onsubmit="return validate()">
		  <div class="navigation2">
				<h1><u>PNR STATUS</u></h1></br>
			<table class="navig2">
			 <tr>
				<td>Enter the PNR for your booking below to get the status.<br>You will find it on the top left corner of the ticket</td>
						<tr>
						<td><br><center><input type="text" name="t1" width="150px" id="pnr" placeholder="Enter PNR"></input></td>
						</tr>
			</tr>
			</table>
			<div class="niv1">
						<center><input type="submit" name="b1" value="Get Details" >
			</div>	
		</div>
</form>

                  
              
           
        
        	
            <div class="cleaner"></div>
        </div> <!-- end of main column -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of content -->
    
    
    <div class="footer-bottom">
				
				<p><span style="padding-left:50px">Designed by: Arka Ghosh Chowdhury</p>
			</div>
			

</div> <!-- end of container wrapper -->

</html>


































