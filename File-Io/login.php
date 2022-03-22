<?php 
	define("filepath", "data.txt");
	$uname="";
	$unameErr="";
	$pass="";
	$passErr="";
	$flag=FALSE;

	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		if(empty($_POST['uname'])) {
		$unameErr = "Userame Is Required!";
		}
		else {
		$uname =($_POST['uname']);
		}
		if(empty($_POST['pass'])) {
		$passErr = "Password Is Required!";
		}
		else {
		$pass =($_POST['pass']);
		}
		
		$data= file_get_contents("data.txt");
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