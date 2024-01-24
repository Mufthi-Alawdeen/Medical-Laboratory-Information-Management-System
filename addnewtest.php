<?php
require 'connection.php';

if (isset($_POST["submit"])) {
  $Tname = $_POST["Tname"];
  $Tprice = $_POST["Tprice"];
  $Tdiss = $_POST["Tdiss"];

  if ($_FILES["image"]["error"] == 4) {
    echo "<script> alert('Image Does Not Exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
	
    
    if (!in_array($imageExtension, $validImageExtension)) {
      echo "<script> alert('Invalid Image Extension'); </script>";
    } else if ($fileSize > 1000000) {
      echo "<script> alert('Image Size Is Too Large'); </script>";
    } else {
		
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'uplords/' . $newImageName);

      $query = "INSERT INTO tests (Test_ID, Tname, Tprice, Tdiss, image) 
	  VALUES ('', '$Tname', '$Tprice', '$Tdiss', '$newImageName')";
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
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ARM Medi Lab</title>
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
      background-color: gray;
      padding: 12px 35px;
      border-radius: 4px;
    }

    #slogan {
      margin-top: -34px;
      color: #8bcb34;
    }

    h1 {
      color: #095d83;
    }

    .two-col {
      overflow: hidden;
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

    input[type=text],
    select,
    textarea,
    input[type=number] {
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
	<div id="logo">
	  <a href="home.html"><img src="images/ARM Logo.png" width="180px" height="180px"></a>
	</div>
	<h1 text align="center" style="font-family:verdana ; font-size:55px ">ARM MEDI LAB</h1>
	<p text align="center" style="font-family:verdana ; font-size:25px" id="slogan">we care...</p>

	<br><br><br>
	<hr>
	<br>
	<h1 text align="center" style="font-family:verdana ;font-size:27px ; text-transform: uppercase">Add New Tests</h1>
	<br>
	<div class="container">
	  <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
		

		<div class="two-col">
		  <div class="col1">
			<label for="TestName">Test Name :</label>
			<input type="text" id="Tname" name="Tname" placeholder="Test Name">
		  </div>
		  <div class="col2">
			<label for="Tamt">Price in LKR :</label>
			<input type="number" id="Tprice" name="Tprice" placeholder="00.00">
		  </div>
		</div>

		<label for="Tdiss">Description :</label>
		<textarea id="Tdiss" name="Tdiss" placeholder="Write something" style="height:200px"></textarea>
		<br>

		<div id="Dp">
		  <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="">
		</div>

		<br><br><br>
		<button type="submit" name="submit" id="btnf">Submit</button>
		<input type="reset" value="Clear">
	  </form>
	</div>

</body>
</html>
