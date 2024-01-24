
<?php
session_start();

	

?>
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
		
		<?php echo  '<b><center><p style="font-size: 30px; font-family: Verdana, sans-serif; color:#095d83"> Hello ,' . $_SESSION["username"]. '!' . '</p><c/center></b>'  ?>
		
		<br><br>
		<br><br>
		<br><br>
		
		<div class="row">
		  <div class="column">
			<div class="card">
			  <img src="images/report.png" alt="Denim Jeans" style="width:100%">
			  <p><a href="./addreport.php"><button>Add new reports</button></a></p>
		</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="images/Test.png" alt="Denim Jeans" style="width:100%">
			  <p><a href="./addnewtest.php"><button>Add new tests</button></a></p>
		</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="images/Inquirey.png" alt="Denim Jeans" style="width:100%">
			  <p><a href="./admininq.php"><button>View Inquiry</button></a></p>
		</div>
		  </div>
		</div>
		
	</body>

</HTML>