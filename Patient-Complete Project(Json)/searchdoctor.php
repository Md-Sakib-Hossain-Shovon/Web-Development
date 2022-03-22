<?php 
	define("filepath", "users1.json");
	$docname = $specializedin = "";
	$isValid = true;
	$docnameErr = $specializedinErr = "";
	$flag=FALSE;
	$uid = "";

	
	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}
	

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$docname = $_POST['docname'];
		$specializedin = $_POST['specializedin'];
		if(empty($docname)) {
			$docnameErr = "Doctor name is required!";
			$isValid = false;
		}
		if(empty($specializedin)) {
			$specializedinErr = "Specializedin field is required!";
			$isValid = false;
		}
		if($isValid) {
			
			$data= file_get_contents("users1.json");
			$tempData = json_decode($data);
		
			foreach($tempData as $tempObject)
				{
				if($tempObject->docname==$docname && $tempObject->specializedin==$specializedin)
				{
				$flag=true;
				break;
			}
		}
	if($flag)
	{
		echo "Doctor Available";	
		
	}
	else
	{
		echo "Sorry No Doctor Available!";
	}

			if($flag) {
				if(isset($_POST['rememberme'])) {
					setcookie("uid", $docname, time() + 60*60*24*30);
				}
				session_start();
				$_SESSION['uid'] = $docname;

				header("Location: index1.php");
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
	<title>Search Doctor</title>
</head>
<body>

	<h1>Search Doctor</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Search Doctor:</legend>

			<label for="docname">Doctor Name:</label>
			<input type="text" name="docname" id="docname" value="<?php echo $uid; ?>">
			<span style="color:red"><?php echo $docnameErr; ?></span>

			<br><br>

			<label for="specializedin">Specialized In:</label>
			<input type="text" name="specializedin" id="specializedin">
			<span style="color:red"><?php echo $specializedinErr; ?></span>

			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Doctor:</label>

			<br><br>

			<input type="submit" name="submit" value="Search">
		</fieldset>
	</form>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Return To Home Page<br><a href="index.php">Return</a></p>



</body>
</html>