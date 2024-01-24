<!DOCTYPE html>
<html>
<head>
  <title>Verification Code</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Enter Verification Code</h2>
    <form action="verify-code.php" method="POST">
      <label for="verificationCode">Verification Code:</label>
      <input type="text" id="verificationCode" name="verificationCode" required>
      <input type="hidden" name="email" >
	  <p><b> We have sent a temporary verification code to your email! </p></b>
	  
      <a href="changepassword.php" > <button type="button" value="login" id="login">Verify Code</button></a>
	  
	  
	   
    </form>
  </div>
</body>
</html>
