<!DOCTYPE HTML>
<HTML>
	<head>
	<title>ARM Medi Lab</title>
	    <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="contact.css">
		
	<style>
	body {
		margin-left : 25px;
		margin-right : 25px;
		
		
	}
	
	#logo {
		float : left ;
		margin-left : 15px;
		
	}
	
	#Dp{
		float : left ;
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
		
		
		
		input[type=password], select, textarea {
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
		
		input[type=file] {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 12px 5px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size:10px;
		  text-align: center;
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
		  margin-left : 250px;
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
		
		<h1 text align="center" style="font-family:verdana ; font-size:27px " >EDIT PROFILE</h1>
		<br><br>
		
			<div id = "Dp">
				<img  src = "images/dp.png" width = "200px" style="border-radius:100%">
				<br><br>
				<input type="file" >
			</div>
			
	<div class="container">
	<form action="/action_page.php" >
		<div class="two-col">
			<div class="col1">
				<label for="fname">First Name :</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name">
			</div>
			<div class="col2">
				<label for="lname">Last Name :</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name">
			</div>
		</div>
		
		
		<div class="two-col">
			<div class="col1">
				<label for="country">Gender</label>
					<select id="gender" name="gender">
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					  
					</select>
			</div>
			<div class="col2">
				<label for="birthday">Date of birth :</label>
				<input type="date" id="DOB" name="birthday" placeholder="MM/DD/YYYY">
			</div>
		</div>
		
		
		<div class="two-col">
			<div class="col1">
				<label for="tnum">Telephone Number :</label>
				<input type="number" id="tnum" name="tnum" placeholder="Telephone Number">
			</div>
			<div class="col2">
				<label for="eadd">Email Address :</label>
				<input type="text" id="lname" name="lastname" placeholder="Email Address">
			</div>
		</div>
		
		<div class="two-col">
			<div class="col1">
				<label for="pwd">Password:</label>
				<input type="password" id="pwd" name="pwd" minlength="8">
			</div>
			<div class="col2">
				<label for="pwd">Confirm Password:</label>
				<input type="password" id="pwd" name="pwd" minlength="8">
			</div>
		</div>
		
		
        <input type="radio"> <label>I have read and agreed the Privacy Policy</label>
		
		<br><br><br>
			<input type="submit" value="Save" >
			<input type="reset" value="Clear">

	</div>
	
		
		
	</body>

</HTML>