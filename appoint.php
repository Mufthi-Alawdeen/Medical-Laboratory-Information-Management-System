<?php
	require 'connection.php';
	
	$currentDate = date('m-d-Y');

	

	if (isset($_POST["submit"])) {
		$Afname = $_POST ["Afname"];
		$Atnum = $_POST ["Atnum"];
		$Atest = $_POST ["Atest"];
		$Adate = $_POST ["Adate"];
		$Atime = $_POST ["Atime"];
		
	
		$query = "INSERT INTO appoinment (appNo,uname, TleNo , testname ,date, time ) 
				VALUES ('' , '$Afname', '$Atnum', '$Atest', '$Adate' , '$Atime')";	
		mysqli_query($conn, $query);
		
		echo "
			<script>
			  alert('Successfully Submited');
			  //document.location.href = './payment.php';
			</script>";
	

	}

?>

<!DOCTYPE HTML>
<HTML>
	<head>
	<title>ARM Medi Lab</title>
	    <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="subcss.css">
		
	<style>
		body { 
			margin-left : 25px;
			margin-right : 25px;
		}
		#logo {
			float : left ;
			margin-left : 15px;
			color: white;
			shadow: white;
		}
		
		#banner {
			margin-left : 12px;
		}
		
		#slogan{
			margin-top : -34px;
			color:  #8bcb34;
		}
		h1{
			color :  #095d83;
		
		}
		
		.two-col {
			overflow: hidden;/* Makes this div contain its floats */
		}

		.two-col .col1,
		.two-col .col2 {
			width: 48%;
		}

		.two-col .col1 {
			float: left;
		}

		.two-col .col2 {
			float: right;
		}

		.two-col label {
			display: block;
		}
		
		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}

		input[type=submit] {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size:17px;
		}

		input[type=submit]:hover {
		  background-color: #095d83;
		}
		
		input[type=reset] {
		  background-color: #87ac54;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size:17px;
		  float : right ;
		}
		
		input[type=reset]:hover {
		  background-color: #8bcb34;
		}

		.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 25px;
		  font-family:verdana;
		  color : #095d83;
		  font-size:13px;
		}
				
		#myBtn {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  font-size: 16px;
		  border: none;
		  outline: none;
		  background-color: #1c9bd3;
		  color: white;
		  cursor: pointer;
		  padding: 10px;
		  border-radius: 50px;
		  opacity: 0.7;
		}

		#myBtn:hover {
		  background-color: #1c9bd3;
		  border: 2px solid #777;
		}
		
		input[type=number], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}
		
		input[type=date], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}

		input[type=submit] {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size:17px;
		}

		input[type=submit]:hover {
		  background-color: #095d83;
		}
		
		input[type=reset] {
		  background-color: #87ac54;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size:17px;
		  float : right ;
		}
		
		input[type=reset]:hover {
		  background-color: #8bcb34;
		}
		
		#btnf {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size: 17px;
		}

		#btnf:hover {
		  background-color: #095d83;
		}
		
		input[type="radio"]:checked + label {
			/* Customize the color and background of the label when the associated radio button is checked */
			color: white;
			background-color: #095d83;
		  }
	</style>
	
	</head>
	
	<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script>
		
		
			// Get the button
			let mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			  } else {
				mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		</script>
		
		<br>
		<div id = "logo">
			<a href = "home.html"><img src = "images/ARM Logo.png" width = "180px"></a>
		</div>
			<h1 text align="center" style="font-family:verdana ; font-size:55px " >ARM MEDI LAB</h1>
			<p text align = "center" style="font-family:verdana ; font-size:25px" id = "slogan">we care...</p>
			
		<br><br><br>
		<hr>
		<br>
			<h1 text align="center" style="font-family:verdana ; font-size:27px " >APPOINTMENT RESERVATION</h1>
		<br><br>	
		<div class="container">
		  <form action="" method = "POST">
		  
		  
			  <div class="two-col">
					<div class="col1">
					<label for="fname">User Name :</label>
					<input type="text" id="fname" name="Afname" placeholder="Your name" required>
					
					<label for="tnum">Telephone Number :</label>
					<input type="number" id="tnum" name="Atnum" placeholder="Telephone Number" required>
					<div class="row">
					<label for="test">Test Type :</label>
					<select id="test" name="Atest" required>
					<?php
						$rows = mysqli_query($conn, "SELECT *
											FROM tests ORDER BY Test_ID DESC");
						foreach ($rows as $row) :
					?>
					  <option value="<?php echo $row["Tname"];?>"><?php echo $row["Tname"];?></option>
					<?php endforeach; ?>
					</select>
					<label for="date">Select Date :</label>
						<input type="date" id="Sdate" name="Adate" placeholder="MM/DD/YYYY" required>
					
				</div></div>
					<div class="col2">
					<label for="time">Select Time Slot :</label><br><br><br>
						<div class="pill-nav">
						  
						<a><label for="1">
                        <input type="radio" name="Atime" value="08:00-08:30"> 08:00-08:30</label></a>
						<a><label for="2">
                        <input type="radio" name="Atime" value="08:30-09:00"> 08:30-09:00</label></a>
						<a><label for="3">
                        <input type="radio" name="Atime" value="09:00-09:30"> 09:00-09:30</label></a>
						  
						</div>
						<br>
						<div class="pill-nav">
						<a><label for="4">
                        <input type="radio" name="Atime" value="09:30-10:00"> 09:30-10:00</label></a>
						<a><label for="5">
                        <input type="radio" name="Atime" value="10:00-10:30"> 10:00-10:30</label></a>
						<a><label for="6">
                        <input type="radio" name="Atime" value="10:30-11:00"> 10:30-11:00</label></a>
						</div>
						<br>
						
						<div class="pill-nav">
						<a><label for="7">
                        <input type="radio" name="Atime" value="11:00-11:30"> 11:00-11:30</label></a>
						<a><label for="8">
                        <input type="radio" name="Atime" value="11:30-12:00"> 11:30-12:00</label></a>
						<a><label for="9">
                        <input type="radio" name="Atime" value="12:00-12:30"> 12:00-12:30</label></a>
						</div>
						<br>
						
						<div class="pill-nav">
						<a><label for="10">
                        <input type="radio" name="Atime" value="13:00-13:30"> 13:00-13:30</label></a>
						<a><label for="11">
                        <input type="radio" name="Atime" value="13:30-14:00"> 13:30-14:00</label></a>
						<a><label for="12">
                        <input type="radio" name="Atime" value="14:00-14:30"> 14:00-14:30</label></a>
						</div>
						<br>
					</div>
				</div>
				
				<br><br>
				<button type="submit" name="submit" id="btnf" href="./payment.php">Payment</button>
				<input type="reset" value="Clear">
		</form>
		</div>
		
	</body>

</HTML>