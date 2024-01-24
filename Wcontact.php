<?php
	require 'connection.php';

	if (isset($_POST["submit"])) {
		$Ctitle = $_POST ["Ctitle"];
		$Cfname = $_POST ["Cfname"];
		$Clname = $_POST ["Clname"];
		$Ctelno = $_POST ["Ctelno"];
		$Cemail = $_POST ["Cemail"];
		$Cadd = $_POST ["Cadd"];
		$Cinq = $_POST ["Cinq"];
		
		$query = "INSERT INTO inq (InqID, Title, Fname, Lname, TleNo , Email , `Add` , Inq) 
				VALUES ('' , '$Ctitle', '$Cfname', '$Clname', '$Ctelno', '$Cemail' , '$Cadd' , '$Cinq')";	
		mysqli_query($conn, $query);
		
		echo "
			<script>
			  alert('Successfully Submited');
			  
			</script>";

	}

?>

<!DOCTYPE HTML>
<HTML>
	<head>
	<title>ARM Medi Lab</title>
	    <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="contact.css">
		
	<style>
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

        .login-button {
            /* ...Existing button styles... */
            position: relative; /* Add position property for absolute positioning of emoji */
            padding-left: 2rem; /* Adjust padding to make space for the emoji */
			margin-top:-50px;
			background-color :#8bcb34;
        }

        .login-button::before {
            content: "\1F464"; /* Unicode character for login emoji */
            position: absolute;
            left: 0.5rem; /* Adjust the left position of the emoji */
            top: 50%; /* Adjust the vertical position of the emoji */
            transform: translateY(-50%); /* Center the emoji vertically */
            font-size: 1.2rem; /* Adjust the size of the emoji */
			margin-left:20px;
			color: white;
        }
		
		

		
	</style>
	
	</head>
	
	<body>
		<!--Page up Button-->
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
	
		<div id = "logo">
			<a href = "home.html"><img src = "images/ARM Logo.png" width = "250px"></a>
		</div>
			<h1 text align="center" style="font-family:verdana ; font-size:55px " >ARM MEDI LAB</h1>
			<p text align = "center" style="font-family:verdana ; font-size:25px" id = "slogan">we care...</p>
			<div class="pill-nav">
				<!-- ...Existing menu links... -->
				<a href="login.php" class="login-button">Login</a>
			</div>

		
			<br><br><br>
		
		<div class="pill-nav">
		  <a class="active"  href="./Wcontact.php" >Contact Us</a>
		  <a href="./Wreport.php">Reports</a>
		  <a href="./Wourteam.php">Our Team</a>
		  <a href="./Wourtest.php">Our Tests</a>
		  <a href="./Whome.php">Home</a>
		</div>
		
		<br><br><br>
		<hr>
		<br><br>
		
		<img src = "images/we care for you (1).png" width = "100%">
	<!-- Form Section -->	
		<h1 text align="center" style="font-family:verdana ;font-size:38px ; text-transform: uppercase">Contact Us</h1>
		
		<br><br><br>
		<div class="container">
		  <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
		  
				<label for="country">Title</label>
					<select id="country" name="Ctitle">
					  <option value="Mr">Mr</option>
					  <option value="Mrs">Mrs</option>
					  <option value="Ms">Ms</option>
					  <option value="Prof">Prof</option>
					  <option value="Rev">Rev</option>
					</select>
				
		  
			  <div class="two-col">
					<div class="col1">
					<label for="fname">First Name :</label>
					<input type="text" id="fname" name="Cfname" placeholder="Your name">
				</div>
					<div class="col2">
					<label for="lname">Last Name :</label>
					<input type="text" id="lname" name="Clname" placeholder="Your last name">
					</div>
				</div>
				
				<div class="two-col">
					<div class="col1">
					<label for="tnum">Telephone Number :</label>
					<input type="number" id="tnum" name="Ctelno" placeholder="Telephone Number">
				</div>
					<div class="col2">
					<label for="eadd">Email Address :</label>
					<input type="text" id="email" name="Cemail" placeholder="Email Address">
					</div>
				</div>
				
				<label for="add">Address :</label>
				<input type="text" id="add" name="Cadd" placeholder="Address">
				
				<label for="Inquiry">Inquiry</label>
				<textarea id="subject" name="Cinq" placeholder="Write something" style="height:200px"></textarea>
			<br>
				<button type="submit" name="submit" id="btnf">Submit</button>
				<input type="reset" value="Clear">
		</form>
		</div>
		</b>
		<br><br>
		
		<h1 text align="center" style="font-family:verdana ;font-size:38px">Location</h1>
		<br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.694795422844!2d80.61014677425324!3d7.27552751396918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368bfd631eeb9%3A0x881fd608acc078bb!2sSLIIT%20Kandy%20Center!5e0!3m2!1sen!2slk!4v1681324949673!5m2!1sen!2slk" 
			width="100%" 
			height="450" 
			style="border:5px;" 
			loading="lazy" 
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
		
		<br><br><br>
		
		<div class="footer">
			<p>Developed by : RAM | ram@gamil.com</p>
		</div>
	
	</body>
</HTML>