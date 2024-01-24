<!DOCTYPE HTML>
<HTML>
	<head>
	<title>Our Team</title>
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
		
		
		h2{
			color :  #095d83;
		}
		
		.row {
		  display: flex;
		}

		.column {
		  padding: 15px;
		}
		
		
		.p2{
			float : right ;
			border-radius: 100%;
			width : 200px;
		}
		
		
		
		fieldset {
			background-color: #eeeeee;
			border-radius: 10px;
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
		  <a href="./reports.php">Reports</a>
		  <a class="active"  href="./our team.php">Our Team</a>
		  <a href="./ourtest.php">Our Tests</a>
		  <a href="./home.php">Home</a>
		</div>
		<br><br><br>
		<hr>
		
		<br>
		
		<h1 text align="center" style="font-family:verdana ;font-size:38px ; text-transform: uppercase">Our Team</h1>
		
		<br><br>
		<fieldset>
			<div class="row">
			  <div class="column">
				<img src = "images/muf.jpg" class = "p2">
			  </div>
			  <div class="column">
				<h2 style="font-family:verdana ">Mr.Mufthi Alawdeen</h2>
				<p style="font-family:verdana ">The exportation of tea shows a fluctuating trend over the given period. In 2018, the export volume stood at approximately 150,000 metric tons. It experienced a slight decline in 2019, reaching around 140,000 metric tons. However, there was a significant increase in 2020, with tea exports reaching approximately 180,000 metric tons. The following year, in 2021, there was a slight decline, with exports dropping to around 165,000 metric tons. Finally, in 2022, the export volume experienced a notable increase, surpassing the previous years and peaking at approximately 200,000 metric tons.</p>
			  </div>
			</div>
		</fieldset>
		
			<br><br>
			
		<fieldset>
			<div class="row">
			  <div class="column">
				<h2 style="font-family:verdana ">Mr.Rashad Cader</h2>
				<p style="font-family:verdana ">The exportation of tea shows a fluctuating trend over the given period. In 2018, the export volume stood at approximately 150,000 metric tons. It experienced a slight decline in 2019, reaching around 140,000 metric tons. However, there was a significant increase in 2020, with tea exports reaching approximately 180,000 metric tons. The following year, in 2021, there was a slight decline, with exports dropping to around 165,000 metric tons. Finally, in 2022, the export volume experienced a notable increase, surpassing the previous years and peaking at approximately 200,000 metric tons.</p>
			  </div>
			  <div class="column">
			  <div class ="NT">
				<img src = "images/rash.jpg"  class = "p2"></div>
			  </div>
			</div>
		</fieldset>
		
			<br><br>
		
		<fieldset>
			<div class="row">
			  <div class="column">
				<img src = "images/ayy.jpeg"  class = "p2">
			  </div>
			  <div class="column">
				<h2 style="font-family:verdana ">Mr.Ayyash Zamny</h2>
				<p style="font-family:verdana ">The exportation of tea shows a fluctuating trend over the given period. In 2018, the export volume stood at approximately 150,000 metric tons. It experienced a slight decline in 2019, reaching around 140,000 metric tons. However, there was a significant increase in 2020, with tea exports reaching approximately 180,000 metric tons. The following year, in 2021, there was a slight decline, with exports dropping to around 165,000 metric tons. Finally, in 2022, the export volume experienced a notable increase, surpassing the previous years and peaking at approximately 200,000 metric tons.</p>
			  </div>
			</div>
		</fieldset>
		
			<br><br>
			
		<fieldset>
			<div class="row">
			  <div class="column">
				<h2 style="font-family:verdana ">Mr.Ashif Nawas</h2>
				<p style="font-family:verdana ">The exportation of tea shows a fluctuating trend over the given period. In 2018, the export volume stood at approximately 150,000 metric tons. It experienced a slight decline in 2019, reaching around 140,000 metric tons. However, there was a significant increase in 2020, with tea exports reaching approximately 180,000 metric tons. The following year, in 2021, there was a slight decline, with exports dropping to around 165,000 metric tons. Finally, in 2022, the export volume experienced a notable increase, surpassing the previous years and peaking at approximately 200,000 metric tons.</p>
			  </div>
			  <div class="column">
			  <div class ="NT">
				<img src = "images/ash.jpg" class = "p2"></div>
			  </div>
			</div>
		</fieldset>
		
			<br><br>
			
		<fieldset>
			<div class="row">
			  <div class="column">
				<img src = "images/atf.jpg" class = "p2">
			  </div>
			  <div class="column">
				<h2 style="font-family:verdana ">Mr.Aathif Zahir</h2>
				<p style="font-family:verdana ">
				The exportation of tea shows a fluctuating trend over the given period. In 2018, the export 
				volume stood at approximately 150,000 metric tons. It experienced a slight decline in 2019, 
				reaching around 140,000 metric tons. However, there was a significant increase in 2020, 
				with tea exports reaching approximately 180,000 metric tons. The following year, in 2021, 
				there was a slight decline, with exports dropping to around 165,000 metric tons. Finally, in 2022, 
				the export volume experienced a notable increase, surpassing the previous years and peaking at approximately 
				200,000 metric tons.
				</p>
			  </div>
			</div>
		</fieldset>
		
		<br><br><br>
		
		<div class="footer">
			<p>Developed by : RAM | ram@gamil.com</p>
		</div>
	
	</body>

</HTML>