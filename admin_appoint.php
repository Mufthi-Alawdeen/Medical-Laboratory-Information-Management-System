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
		.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 25px;
		  font-family:verdana;
		  color : #095d83;
		  font-size:13px;
		}
		
		#con{
			color : black;
			
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
	
		<div id = "logo">
			<a href = "home.html"><img src = "images/ARM Logo.png" width = "180px"></a>
		</div>
			<h1 text align="center" style="font-family:verdana ; font-size:55px " >ARM MEDI LAB</h1>
			<p text align = "center" style="font-family:verdana ; font-size:25px" id = "slogan">we care...</p>
			
		<br><br><br>
		<hr>
		<br>
		
		<h1 text align="center" style="font-family:verdana ; font-size:27px ; text-transform: uppercase " >appoinment</h1>
		<br><br>
		
		<div class="row">
		<?php
			$rows = mysqli_query($conn, "SELECT *
								FROM appoinment ORDER BY date ASC");
			foreach ($rows as $row) :
		?>
		
		<div class="container">
			<h2>Name : <?php echo $row["appNo"]; ?></h2>
			<h2><?php echo $row["Fname"]; ?> <?php echo $row["Lname"]; ?></h2>
			<div id = "con">
				<h3>Telephone No : <?php echo $row["TleNo"];?></h3>
				<h3>Test Name : <?php echo $row["testname"];?></h3>
				<h3>Date : <?php echo $row["date"];?> <br>Time : <?php echo $row["time"];?></h3>
			</div>
		</div>	
		<br><br>
			<?php endforeach; ?>
		</div>
		
		
	</body>
</HTML>