<?php
	require 'connection.php';
?>

<!DOCTYPE HTML>
<HTML>
	<head>
	<title>ARM Medi Lab</title>
	    <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="contact.css">
		
	<style>
	
				
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
		.column {
		  float: left;
		  width: 33.3%;
		  padding: ;
		}

		/* Clearfix (clear floats) */
		.row::after {
		  content: "";
		  clear: both;
		  display: table;
		}
			
	/*	* {
		  box-sizing: border-box;
		}*/
		
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 300px;
		  hight : 200px;
		  margin:auto;
		  text-align: center;
		  font-family: arial;
		  
		}

		.price {
		  color: grey;
		  font-size: 22px;
		}

		.card button {
		  border: none;
		  outline: 0;
		  padding: 12px;
		  color: white;
		  background-color: #1c9bd3;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		  
		}

		.card button:hover {
		  opacity: 0.7;
		  border: 1px solid #777;
		}

		h2{
		color :  #095d83;
	
		}
		
		.search-box {
			display: flex;
			align-items: center;
			background-color: #f2f2f2;
			padding: 0.5rem;
			border-radius: 50px;
			width : 50%;
			margin-left : 25%;
			
		}
		.search-input {
			flex: 1;
			border: none;
			background-color: transparent;
			margin-right: 0.5rem;
			padding: 0.5rem;
			border-radius: 50px;
			outline: none;
			font-size: 1rem;
		}
		.search-button {
			border: none;
			background-color: #1c9bd3;
			color: white;
			padding: 0.5rem 1rem;
			border-radius: 50px;
			cursor: pointer;
			font-size: 1rem;
		
		}
		.search-button:hover{
			opacity: 0.7;
			
		}
		
		table {
		  font-family: verdana;
		  border-collapse: collapse;
		  width: 100%;
		  
		}
		
		th{
			color:#095d83;
			font-weight: bold;
		}
		
		td, th {
		  border: 5px solid white;
		  text-align: left;
		  padding: 1px;
		  
		}

		td {
		  background-color: #dddddd;
		  
		}
		
		h2{
			color:#1c9bd3;
		}

		.button {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 10px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
          width:100%;
		  font-size:17px;
		}
		
		.button:hover {
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
		<script>
			function loadData(data){
				if (data == "btn1"){
					document.getElementById("img").data="pdf/sample rpt.pdf";
					document.getElementById("para").innerHTML="Report No XXXX XXXX XXXX XXXX";
				}
			}
		</script>
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
		  <a href="./Wcontact.php" >Contact Us</a>
		  <a class="active"  href="./Wreport.php">Reports</a>
		  <a href="./Wourteam.php">Our Team</a>
		  <a href="./Wourtest.php">Our Tests</a>
		  <a href="./Whome.php">Home</a>
		</div>
		
		<br><br><br>
		<hr>
		
		<br><br>
		
		
		<br><br>
		
		<b><p text align="center" style="font-family:verdana ;font-size:20px ; color:red; ">To View Report Please Log In To Your Account!</p></b>
		
		<br><br><br>
		
		<h2 id="para"> </h2>
		<object id="img" width="100%" height="500px"> </object>
		<!--<object data="pdf/sample rpt.pdf" type="application/pdf" width="100%" height="500px">-->
		
		<div class="footer">
			<p>Developed by : RAM | ram@gamil.com</p>
		</div>
		
	</body>

</HTML>