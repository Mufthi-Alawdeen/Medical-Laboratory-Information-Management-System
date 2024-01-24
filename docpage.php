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
	
	h2{
		background-color: #f2f2f2;
		padding: 10px;
		font-family:verdana;
		color : #095d83;
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
		
		h4{
			font-family:verdana;
		}
		
		#appno{
			background-color: #f2f2f2;
			padding: 15px;
			font-weight: bold;
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
		
		<h3 style = "font-size:26px ;font-family:verdana; ">Appointment Number :</h3>
		<p style = "color:#095d83 ; font-size:33px ;font-family:verdana;" id="appno">XXXX XXXX XXXX XXXX</p>
		
		<br>
		
		<h4>Patient Name :</h4>
		<h2>M.A.M Mufthi</h2>
		
		<div class="two-col">
			<div class="col1">
				<h4>Telephone Number :</h4>
				<h2>077 XXXXXXX</h2>
			</div>
			<div class="col2">
				<h4>Email Adderss :</h4>
				<h2>example@gamil.com</h2>
			</div>
		</div>
		
		<h3>Report</h3>
			<object data="pdf/sample rpt.pdf" type="application/pdf" width="100%" height="500px">
		</object>
		
		<h3 style = "color:#095d83 ; font-size:25px ;font-family:verdana;">Make annotahtions :</h3>
		<textarea id="subject" name="subject" placeholder="Write something" style="height:200px"></textarea>
		
		<br>
			<input type="submit" value="Submit" >
			<input type="reset" value="Clear">
		
	</body>

</HTML>