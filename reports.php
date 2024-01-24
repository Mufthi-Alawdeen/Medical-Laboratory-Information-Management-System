<?php
	require 'connection.php';
	

?>

<!DOCTYPE HTML>
<HTML>
	<head>
	<title>Reports</title>
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
           	margin-top:-100px;
			background-color :#8bcb34;
        }

        .login-button::before {
           
            position: absolute;
          
           
            
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
						<a href="Whome.php" class="login-button">Logout</a>
						</div>
			<br><br><br>
		
		
		<div class="pill-nav">
		  <a href="./contact.php" >Contact Us</a>
		  <a class="active"  href="./reports.php">Reports</a>
		  <a href="./our team.php">Our Team</a>
		  <a href="./ourtest.php">Our Tests</a>
		  <a href="./home.php">Home</a>
		</div>
		
		<br><br><br>
		<hr>
		
		<br><br>
		
		<div class="container mt-5">
		<form class="form-inline my-2 my-lg-0">
			<div class="search-box">
				<input class="search-input" type="search" placeholder="Search ...">
				<button class="search-button" type="submit">Search</button>
			</div>
		</form>
		</div>
		
		<br>
		
		<h1 text align="center" style="font-family:verdana ;font-size:38px ; text-transform: uppercase">Test Reports</h1>
		
		<br><br>
		


		<table>
		  <tr>
			<th>Appointment No</th>
			<th>Test Type</th>
			<th>View</th>
		  </tr>
		  <?php
			$rows = mysqli_query($conn, "SELECT * FROM report  ");
			foreach ($rows as $row) :
			?>
		  <tr>
			<td><?php echo $row["appNo"];?></td>
			<td><?php echo $row["testN"];?></td>
			<td><a href="#para"><button id="btn1" onclick="loadData('btn1')" class="button" >View Report</button></a></td>
		  </tr>
		  <?php endforeach; ?>
		</table>
		
		<br><br><br>
		
		<h2 id="para"> </h2>
		<object id="img" width="100%" height="500px"> </object>
		<!--<object data="pdf/sample rpt.pdf" type="application/pdf" width="100%" height="500px">-->
		
		<div class="footer">
			<p>Developed by : RAM | ram@gamil.com</p>
		</div>
	

	</body>
</HTML>