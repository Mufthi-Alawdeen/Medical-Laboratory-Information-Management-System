<!DOCTYPE HTML>
<HTML>
	<head>
	<title>ARM Medi Lab</title>
	     <link rel=" shoutcut icon" type="image/png" href="img/favicon.png">
	
	<style>
	
	body { 
		margin-left : 25px;
		margin-right : 25px;
	}
	#logo {
		float : left ;
		margin-left : 15px;
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

	  /* Style the links inside the pill navigation menu */
		.pill-nav a {
		  display: inline-block;
		  color: black;
		  text-align: center;
		  padding: 10px;
		  text-decoration: none;
		  font-size: 20px;
		  border-radius: 25px;
		  float : right;
		  width: 12.4% ;
		  margin-left : 11px;
		  margin-right : 11px;
		  font-family:verdana;
		  
		}

		/* Change the color of links on mouse-over */
		.pill-nav a:hover {
		<!--  background-color: #ddd; -->
		  color: black;
		  border: 2px solid #777;
		  
		  
		}

		/* Add a color to the active/current link */
		.pill-nav a.active {
		  background-color: #1c9bd3;
		  color: white;
		}
		.footer {
		   left: 12px;
		   bottom: 12px;
		   width: 100%;
		   background-color: #8bcb34;
		   color: white;
		   text-align: center;
		   padding : 1px;
		}
		.mySlides {
			display:none;
		}
		
	/*	* {
		  box-sizing: border-box;
		}*/

		.column {
		  float: left;
		  width: 20%;
		  padding: ;
		}
		
		.column :hover{
			opacity: 0.7;
			transition: .3s ease;
			
			
		}

		/* Clearfix (clear floats) */
		.row::after {
		  content: "";
		  clear: both;
		  display: table;
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
		  <a href="./Wcontact.php">Contact Us</a>
		  <a href="./Wreport.php">Reports</a>
		  <a href="./Wourteam.php">Our Team</a>
		  <a href="./Wourtest.php">Our Tests</a>
		  <a class="active" href="./Whome.php">Home</a>
		</div>
		
		<br><br><br><hr>
		<br><br>
		
		<div class="w3-content w3-section" style="max-width:100% " >
		  <img class="mySlides" src="images/sl1.png" style="width:100% ; border-radius: 20px">
		  <img class="mySlides" src="images/sl2.png" style="width:100% ; border-radius: 20px">
		  <img class="mySlides" src="images/sl3.png" style="width:100%; border-radius: 20px">
		  <img class="mySlides" src="images/sl4.png" style="width:100%; border-radius: 20px">
		  <img class="mySlides" src="images/sl5.png" style="width:100%; border-radius: 20px">
		</div>

		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
				  x[myIndex-1].style.display = "block";  
				  setTimeout(carousel, 3500);// Change image every 3.5 seconds
				  
			}
		</script>
		
		<h1 style = "text-align : center ; font-size : 35px">About Us</h1>
		<p style = "text-align : center ; font-size : 19px ; font-family : arial">Welcome to our ARM Medi Lab! We are a team of highly skilled and dedicated professionals committed to providing accurate and reliable laboratory testing services to support patient care. With our advanced technology and extensive expertise, we offer a wide range of tests, including Creatinine (with e GFR) A9C ,CRP S10,Electrolytes B37, ESR X13,Fasting Blood Sugar A1, Full Blood Count A5, HBA1C B52, Lipid Profile A4,Microalbumin (Urine) P22,TSH B104, Urea A8, Urea & Electrolytes SP1, Urine FR A2 and more. Our laboratory is equipped with cutting-edge equipment and follows strict quality control measures to ensure the highest standards of accuracy and precision in our results.<p/>
		<p style = "text-align : center ; font-size : 19px ; font-family : arial"> We pride ourselves on our fast turnaround times and exceptional customer service, working closely with healthcare providers to meet their patients' needs. Our team of experienced laboratory scientists and technicians are trained in the latest techniques and methodologies, and we continuously update our knowledge and skills to stay at the forefront of medical testing. We are dedicated to improving patient outcomes through timely and accurate laboratory testing, and we are committed to maintaining the highest levels of professionalism, confidentiality, and integrity in all aspects of our work. Thank you for choosing our medical laboratory for your testing needs.</p>
		<br><br><br>
		
		<div class="row">
		  <div class="column">
			<a href="#"><img src="images/H1.png" alt="home" style="width:100%"></a>
		  </div>
		  <div class="column">
			<a href="#"><img src="images/H2.png" alt="ourtest" style="width:100%"></a>
		  </div>
		  <div class="column">
			<a href="#"><img src="images/H3.png" alt="ourteam" style="width:100%"></a>
		  </div>
		  <div class="column">
			<a href="contact.html"><img src="images/H4.png" alt="contact" style="width:100%"></a>
		  </div>
		  <div class="column">
			<a href="Sub Pages/login.html"><img src="images/H5.png" alt="map" style="width:100%"></a>
		  </div>
		</div>

		
		
		
		<br><br><br>
		
		<div class="footer">
		  <p >Developed by : RAM | ram@gamil.com</p>
		</div>
		
		

		
	</body>

</HTML>



