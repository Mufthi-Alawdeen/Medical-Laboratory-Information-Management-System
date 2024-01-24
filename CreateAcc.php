<?php
require 'connection.php';

// Check connection
if (isset($_POST["submit"])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    //$telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform validation and additional checks on the form data as needed

    // Insert the data into the database
    if ($password == $confirm_password) {
        $query = "INSERT INTO loginful (fullname, username, gender, email, telephone, password, usertype) 
                  VALUES ('$fullname', '$username', '$gender', '$email', '', '$password', 'user')";

        if (mysqli_query($conn, $query)) {
            echo "
                <script>
                    alert('Successfully Submitted');
                    window.location.href = 'login.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Error: " . mysqli_error($conn) . "');
                </script>";
        }
    } else {
        echo "
            <script>
                alert('Password does not match. Please enter again.');
            </script>";
    }
}
?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<title>Create Account</title>
	    <link rel="shoutcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="contact.css">
		
	<style>
	body {
		margin-left: 25px;
		margin-right: 25px;
	}
	
	#logo {
		float: left;
		margin-left: 15px;
	}
	
	#Dp {
		float: left;
	}

	#slogan {
		margin-top: -34px;
		color:  #8bcb34;
	}
	
	h1 {
		color:  #095d83;
	}	

	.two-col {
		overflow: hidden; /* Makes this div contain its floats */
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
		
	input[type=text], input[type=date], input[type=number], input[type=password], select, textarea {
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
		font-size: 17px;
	}
		
	#btnf {
		background-color: #1c9bd3;
		color: white;
		padding: 12px 8px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 18px;
		text-align: center;
	}

	#btnf:hover {
		background-color: #095d83;
	}
		
	input[type=reset] {
		background-color: #87ac54;
		color: white;
		padding: 12px 35px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 17px;
		float: right;
	}
		
	input[type=reset]:hover {
		background-color: #8bcb34;
	}

	.container {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 25px;
		font-family: verdana;
		color: #095d83;
		font-size: 13px;
		margin-left: 250px;
	}
	
	</style>
	
	</head>
	
	<body>
		<div id="logo">
			<a href="home.html"><img src="images/ARM Logo.png" width="180px"></a>
		</div>
		<h1 text align="center" style="font-family:verdana; font-size:55px;">ARM MEDI LAB</h1>
		<p text align="center" style="font-family:verdana; font-size:25px;" id="slogan">we care...</p>
		
		<br><br><br>
		<hr>
		<br>
		
		<h1 text align="center" style="font-family:verdana; font-size:27px;">CREATE ACCOUNT</h1>
		<br><br>
		
		<div id="Dp">
			<img src="images/dp.png" width="200px" style="border-radius:100%;">
			<br><br>
			<input type="file">
		</div>
			
		<div class="container">
			<form action="" method="POST">
				<div class="two-col">
					<div class="col1">
						<label for="fullname">Full Name:</label>
						<input type="text" id="fullname" name="fullname" placeholder="Your full name" required>
					</div>
					<div class="col2">
						<label for="username">User Name:</label>
						<input type="text" id="username" name="username" placeholder="Your user name" required>
					</div>
				</div>
				
				<div class="two-col">
					<div class="col1">
						<label for="gender">Gender:</label>
						<select id="gender" name="gender" required>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
					<div class="col2">
						<label for="dob">Date of Birth:</label>
						<input type="date" id="dob" name="dob" placeholder="MM/DD/YYYY" required>
					</div>
				</div>
				
				<div class="two-col">
					<div class="col1">
						<label for="tnum">Telephone Number:</label>
						<input type="number" id="tnum" name="tnum" placeholder="Telephone Number">
					</div>
					<div class="col2">
						<label for="email">Email Address:</label>
						<input type="text" id="email" name="email" placeholder="Email Address" required>
					</div>
				</div>
				
				<div class="two-col">
					<div class="col1">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" minlength="8" required>
					</div>
					<div class="col2">
						<label for="confirm_password">Confirm Password:</label>
						<input type="password" id="confirm_password" name="confirm_password" minlength="8" required>
					</div>
				</div>
				
				<label>
					<input type="checkbox" required> I have read and agreed to the Privacy Policy
				</label>
		
				<br><br><br>
				
				<input type="submit" name="submit" id="btnf" value="Create Account">
				
				<input type="reset" value="Clear">
			</form>
		</div>
	
	</body>
</html>