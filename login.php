<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "arm_medilab";

	session_start();

	$data = mysqli_connect($host, $user, $password, $db);
	if ($data == false) {
		die("connection error");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM loginful WHERE username='" . $username . "' AND password='" . $password . "'";

		$result = mysqli_query($data, $sql);
		
		if ($result && mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			if ($row["usertype"] == "user") {
				session_start();
				$_SESSION["username"] = $username;
				header("location:home.php");
			} else if ($row["usertype"] == "admin") {
				$_SESSION["username"] = $username;
				header("location:adminhome.php");
			}
		} else {
			echo '<script>alert("Username or password incorrect!");</script>';
		}
	}
?>



<html>

<head>
	<title>Log in</title>
	     <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
		 
		 
		 <style>
	
	
		
		.container {
	width: 700px;
	height: 500px;
	margin:6% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
}

.header {
	text-align: center;
	padding-top: 75px;
}

.header h1 {
	color: #333;
	font-size: 45px;
	margin-bottom: 80px;
	margin-top: -5%;
	margin-left: 40%;
}

.main {
	text-align: center;
}

.main input, button {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color:black;
	margin-bottom: 40px;
	border-radius: 50px;
	margin-left: 40%;
}

.main button {
	padding-left: 0;
	background-color: black;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
	border-radius: 50px;
	margin-left: 40%;
	color:white;
}

.main button:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
.main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #333;
	font-size: 16px;
	top: 2px;
	
}
.p1 {
margin-top: -5%;
margin-left: 40%;

}

.p2{
margin-left: 40%;
margin-top: -10%;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  margin-right:50%;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.up{
margin-top: -40%;
}



body {
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

  .logo1 {
  logo-shadow:white;
	
  }
  
 


		
		 </style>
		 
</head>
	
	
<body>
	
		
		
		<div class="container">
 	<div class="header">
	
	<h1 style="color: #095d83" >User login</h1>
	<!-- Modal Content -->
 
    <div class="imgcontainer">
	
      <img src="images/ARM Logo.png" alt="ARM medi lab"  style="float:right:10% ;width:250px;height:250px; margin-top:-5%;" >
    </div>
 		
 	</div>
 	<div class="main  up">
 		<form class="modal-content animate" action="#" method="POST">
 			<span>
 				
 				<input type="text" placeholder="Username" name="username" required>
 			</span><br>
 			<span>
 			
 				<input type="password" placeholder="Password" name="password" required>
 			</span><br>
				<a href="forgotpassword.php" class="p1"  value="fpswd" id="fpswd"> Forgot username/Password</a>
 				 <button type="submit" value="login" id="login" style="background-color:#1c9bd3" >Login</button>
				  
				  
				    
				
				<p class="p2"> Don't have an account?</p>
			    <a href="CreateAcc.php">
    <button type="button" style="background-color:#1c9bd3">Sign up</button>
</a>

 		</form>
 	</div>
 </div>

		

</body>	
	
</html>
