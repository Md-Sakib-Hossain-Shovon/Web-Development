<?php 
require '../Controllers/loginvalidation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
</head>
<body>

	<h1>Login Form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" onsubmit="return isvalid()">
		<fieldset>
			<legend>Login Form:</legend>

		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uid ;?>">
		<span style="color: red;" id="unameErr"><?php echo $unameErr; ?></span>
		<br><br>

		<label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;" id="passErr"><?php echo $passErr; ?></span>
		<br><br>
		
		<input type="checkbox" name="rememberme" id="rememberme">
        <label for="rememberme">Remember me</label>
        <br><br>

		<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	
	<script src="./Controllers/js/js-val-login.js"></script>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Haven't any Account?Click Here For Registration<br><a href="registrationform.php">Go</a></p>

</body>
</html>