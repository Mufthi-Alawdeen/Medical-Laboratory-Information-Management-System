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

		
	</style>
	
	</head>
	
	<body>
		
	
		<div id = "logo">
			<a href = "home.html"><img src = "images/ARM Logo.png" width = "180px"></a>
		</div>
			<h1 text align="center" style="font-family:verdana ; font-size:55px " >ARM MEDI LAB</h1>
			<p text align = "center" style="font-family:verdana ; font-size:25px" id = "slogan">we care...</p>
			
		<br><br><br>
		<hr>
		<br>
		
		<h1 text align="center" style="font-family:verdana ; font-size:27px " >INQUIRY</h1>
		<br><br>
		
		<div class="row">
		<?php
			$rows = mysqli_query($conn, "SELECT *
								FROM inq ORDER BY InqID DESC");
			foreach ($rows as $row) :
		?>
		
		<div class="container">
			<h2>Name : <?php echo $row["Title"]; ?>.<?php echo $row["Fname"]; ?> <?php echo $row["Lname"]; ?></h2>
			<div id = "con">
				<h3>Telephone No : <?php echo $row["TleNo"];?></h3>
				<h3>Email : <?php echo $row["Email"];?></h3>
				<h3>Address : <?php echo $row["Add"];?></h3>
				<h4>Inquiry : <br><?php echo $row["Inq"];?></h4>
			</div>
		</div>	
		<br><br>
			<?php endforeach; ?>
		</div>
		
		
	</body>
</HTML>