<?php 
	define("filepath", "users4.json");
	$donorname = $demail ="";
	$isValid = true;
	$donornameErr = $demailErr ="";
	$flag=FALSE;
	$uid = "";

	
	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}
	

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$donorname = $_POST['donorname'];
		$demail = $_POST['demail'];
		
		if(empty($donorname)) {
			$donornameErr = "Donor name is required!";
			$isValid = false;
		}
		if(empty($demail)) {
			$demailErr = "Donor email is required!";
			$isValid = false;
		}
		if($isValid) {
			
			$data= file_get_contents("users4.json");
			$tempData = json_decode($data);
		
			foreach($tempData as $tempObject)
				{
				if($tempObject->donorname==$donorname && $tempObject->demail==$demail)
				{
				$flag=true;
				break;
			}
		}
	if($flag)
	{
		echo "Donor Available";	
		
	}
	else
	{
		echo "Sorry No Donor Is Available!";
	}

			if($flag) {
				if(isset($_POST['rememberme'])) {
					setcookie("uid", $donorname, time() + 60*60*24*30);
				}
				session_start();
				$_SESSION['uid'] = $donorname;

				header("Location: index4.php");
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
	<title>Search Donor</title>
</head>
<body>

	<h1>Search Donor</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Search Donor:</legend>

			<label for="donorname">Donor Name:</label>
			<input type="text" name="donorname" id="donorname" value="<?php echo $uid; ?>">
			<span style="color:red"><?php echo $donornameErr; ?></span>

			<br><br>

			<label for="demail">Donor Email:</label>
			<input type="text" name="demail" id="demail">
			<span style="color:red"><?php echo $demailErr; ?></span>

			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Donor:</label>

			<br><br>

			<input type="submit" name="submit" value="Search">
		</fieldset>
	</form>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Searched?Go to View Donor List<br><a href="index4.php">Go</a></p>
	<p align=center><br><a href="index.php">Home Page</a></p>

</body>
</html>