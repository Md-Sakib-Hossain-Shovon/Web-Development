<?php 
	define("filepath", "users2.json");

	$id = $docname = $hosname = $specializedin = $availabletime ="";
	$isValid = true;
	$idErr = $docnameErr = $hosnameErr = $specializedinErr = $availabletimeErr ="";
	$successfulMessage = $errorMessage = "";
	$uid ="";
	$flag=FALSE;
	
	
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$id = $_POST['id'];
		$docname = $_POST['docname'];
		$hosname = $_POST['hosname'];
		$specializedin = $_POST['specializedin'];
		$availabletime = $_POST['availabletime'];
		
		if(empty($id)) {
			$idErr = "Id must be given!";
			$isValid = false;
		}
		if(empty($docname)) {
			$docnameErr = "Doctor name can not be empty!";
			$isValid = false;
		}
		if(empty($hosname)) {
			$hosnamenameErr = "Hospital name can not be empty!";
			$isValid = false;
		}
		if(empty($specializedin)) {
			$specializedinErr = "Specialization part can not be empty!";
			$isValid = false;
		}
		if(empty($availabletime)) {
			$availabletimeErr = "Available time can not be empty!";
			$isValid = false;
		}
		
		if($isValid) {
			$id = test_input($id);
			$docname = test_input($docname);
			$hosname = test_input($hosname);
			$specializedin = test_input($specializedin);
			$availabletime = test_input($availabletime);
			
			if(empty($fileData)) {
			$data[] = array("id" => $id,"docname" => $docname, "hosname" => $hosname, "specializedin" => $specializedin, "availabletime" => $availabletime);
			}
			else {
			$data[] = json_decode($fileData);
			array_push($data, array("id" => $id,"docname" => $docname, "hosname" => $hosname, "specializedin" => $specializedin, "availabletime" => $availabletime));
			
			}
			$data_encode = json_encode($data, true);
			write("");
            $response = write($data_encode);
			if($response) {
				$successfulMessage = "Successfully Booked!.";
			}
			else {
				$errorMessage = "Error while saving.";
			}
		}
	}
	function write($content) {
			$resource = fopen(filepath, "a");
			$fw = fwrite($resource, $content . "\n");
			fclose($resource);
			return $fw;
	}
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Appointment</title>
</head>
<body>

	<h1>Book Appointment</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Book Appointment:</legend>
			
			<label for="id">ID:</label>
			<input type="text" id="id" name="id" value="<?php echo $id; ?>">
			<span style="color: red;"><?php echo $idErr; ?></span>
			<br><br>

			<label for="fname">Doctor Name:</label>
			<input type="text" id="docname" name="docname" value="<?php echo $docname; ?>">
			<span style="color: red;"><?php echo $docnameErr; ?></span>
			<br><br>

			<label for="lname">Hospital Name:</label>
			<input type="text" id="hosname" name="hosname" value="<?php echo $hosname; ?>">
			<span style="color: red;"><?php echo $hosnameErr; ?></span>
			<br><br>
			
			<label for="specializedin">Specialized In:</label>
			<select id="specializedin" name="specializedin">
			<option value="">Department</option>
			<option value="Cardiology">Cardiology</option>
			<option value="Dental Science">Dental Science</option>
			<option value="Endocrinology">Endocrinology</option>
			<option value="Medicine">Medicine</option>
			<option value="Neurology">Neurology</option>
			<span style="color: red;"><?php echo $specializedinErr; ?></span>
			</select>
			<br><br>

			<label for="availabletime">Available Time:</label>
			<input type="text" name="availabletime" id="availabletime">
			<span style="color:red"><?php echo $availabletimeErr; ?></span>

			<br><br>

			
			
			<input type="submit" name="submit" value="Book Appointment">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Booked?Go to Your Appointed List<br><br><a href="index2.php">Go</a><p>
	<p align=center><br><a href="index.php">Home Page</a></p>


</body>
</html>