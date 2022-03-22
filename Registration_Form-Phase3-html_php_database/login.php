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

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<fieldset>
			<legend>Login Form:</legend>

		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
		<span style="color: red;"><?php echo $unameErr; ?></span>
		<br><br>

		<label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;"><?php echo $passErr; ?></span>
		<br><br>

			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	

</body>
</html>