<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Change Password</h2>
    <form action="change-password.php" method="POST">
      <label for="newPassword">New Password:</label>
      <input type="password" id="newPassword" name="newPassword" required>
      <input type="hidden" name="email"   >
     <a href="login.php" > <button type="button" value="login" id="login">Change Password</button></a>
	  
	    
    </form>
  </div>
</body>
</html>
