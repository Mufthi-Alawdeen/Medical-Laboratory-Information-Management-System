<?php
require 'connection.php';

if (isset($_POST["submit"])) {
  $appN = $_POST["appN"];
  $usN = $_POST["usN"];
  $date = $_POST["date"];
  $test = $_POST["test"];

  if ($_FILES["image"]["error"] == 4) {
    echo "<script> alert('Image Does Not Exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['pdf'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
	
    
    if (!in_array($imageExtension, $validImageExtension)) {
      echo "<script> alert('Invalid Image Extension'); </script>";
    } else if ($fileSize > 10000000) {
      echo "<script> alert('Image Size Is Too Large'); </script>";
    } else {
		
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'uplords/' . $newImageName);

      $query = "INSERT INTO report (reportID,appNo, username, date, testN, pdf) 
	  VALUES ('', '$appN', '$usN', '$date', '$test','$newImageName')";
      mysqli_query($conn, $query);

      echo "
        <script>
          alert('Successfully Added');
          //document.location.href = 'addnewtest.php';
        </script>";
    }
  }
}
?>


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

		.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 25px;
		  font-family:verdana;
		  color : #095d83;
		  font-size:13px;
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

		#btnf {
		  background-color: #1c9bd3;
		  color: white;
		  padding: 12px 35px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size: 17px;
		}

		#btnf:hover {
		  background-color: #095d83;
		}

        #Dp {
            background-color: gray;
            padding: 12px 35px;
            border-radius: 4px;
            text-align : Center;
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

        <h1 text align="center" style="font-family:verdana ;font-size:27px ; text-transform: uppercase">Add New Report</h1>
        <br>
		<div class="container">
		  <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
		  
		  
			  <div class="two-col">
					<div class="col1">
					<label for="fname">Appointmant No :</label>
					<input type="text" id="fname" name="appN" >
				    </div>
					<div class="col2">
					<label for="lname">User Name :</label>
					<input type="text" id="lname" name="usN" >
					</div>
				</div>
				
				<div class="two-col">
					<div class="col1">
					<label for="tnum">Date :</label>
					<input type="date" id="tnum" name="date" >
				    </div>
					<div class="col2">
					<label for="test">Test Type :</label>
					<select id="test" name="test" required>
					<?php
						$rows = mysqli_query($conn, "SELECT *
						FROM tests ORDER BY Test_ID DESC");
						foreach ($rows as $row) :
					?>
					  <option value="<?php echo $row["Tname"];?>"><?php echo $row["Tname"];?></option>
					<?php endforeach; ?>
					</select>
					</div>
				</div>
                <div class="two-col">
				<label for="test">Add Report :</label>
				<div id="Dp">
		            <input type="file" name="image" id="image" accept=".pdf" value="">
		        </div></div>
			<br><br><br><br>
				<button type="submit" name="submit" id="btnf">Submit</button>
				<input type="reset" value="Clear">
        
		</form>
		
	</body>

</HTML>