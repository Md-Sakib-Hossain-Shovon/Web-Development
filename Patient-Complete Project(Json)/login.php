<?php 
	define("filepath", "users.json");
	$uname = $pass = "";
	$isValid = true;
	$unameErr = $passErr = "";
	$flag=FALSE;
	$uid = "";

	
	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}
	

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		if(empty($uname)) {
			$unameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($pass)) {
			$passErr = "Password can not be empty!";
			$isValid = false;
		}
		if($isValid) {
			
			$data= file_get_contents("users.json");
			$tempData = json_decode($data);
		
			foreach($tempData as $tempObject)
				{
				if($tempObject->uname==$uname && $tempObject->pass==$pass)
				{
				$flag=true;
				break;
			}
		}
	if($flag)
	{
		echo "Welcome";	
		
	}
	else
	{
		echo "Login Failed!";
	}

			if($flag) {
				if(isset($_POST['rememberme'])) {
					setcookie("uid", $uname, time() + 60*60*24*30);
				}
				session_start();
				$_SESSION['uid'] = $uname;

				header("Location: index.php");
			}
		}
	

	function read() {
		$resource = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($resource, $fz);
		}
		fclose($resource);
		return $fr;
	} 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
</head>
<body>

	<h1>Login Form</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Login Form:</legend>

			<label for="uname">Username:</label>
			<input type="text" name="uname" id="uname" value="<?php echo $uid; ?>">
			<span style="color:red"><?php echo $unameErr; ?></span>

			<br><br>

			<label for="pass">Password:</label>
			<input type="password" name="pass" id="pass">
			<span style="color:red"><?php echo $passErr; ?></span>

			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Me:</label>

			<br><br>

			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Haven't any Account?Click Here For Registration<br><a href="registration.php">Go</a></p>

</body>
</html>