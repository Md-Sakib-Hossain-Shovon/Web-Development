<?php 
require "./Controllers/loginvalidation.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<h1>Login Form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" onsubmit="return isvalid()">
		<fieldset>
			<legend>Login Form:</legend>

		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
		<span style="color: red;" id="unameErr"><?php echo $unameErr; ?></span>
		<br><br>

		<label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;" id="passErr"><?php echo $passErr; ?></span>
		<br><br>

		<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	
	<script>
		function isvalid() {
			var flag = true;
			
			var unameErr = document.getElementById("unameErr");
			var passErr = document.getElementById("passErr");
			
			
			var uname = document.forms["login"]["uname"].value;
			var pass = document.forms["login"]["pass"].value;
			
			unameErr.innerHTML = "";
			passErr.innerHTML = "";

		
			if(uname=== "") {
				flag = false;
				unameErr.innerHTML = "please fill up the user name";
			}
			if(pass=== "") {
				flag = false;
				passErr.innerHTML = "please fill up the password";
			}
			return flag;
		}
	</script> 


</body>
</html>