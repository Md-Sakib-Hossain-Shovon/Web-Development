<?php 
	define("filepath", "users3.json");

	$id = $doname = $doemail = $dorgan ="";
	$isValid = true;
	$idErr = $donameErr = $doemailErr = $dorganErr ="";
	$successfulMessage = $errorMessage = "";
	$flag=FALSE;
	
	
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$id = $_POST['id'];
		$doname = $_POST['doname'];
		$doemail = $_POST['doemail'];
		$dorgan = $_POST['dorgan'];
		
		
		if(empty($id)) {
			$idErr = "Id must be given!";
			$isValid = false;
		}
		if(empty($doname)) {
			$donameErr = "Donor name can not be empty!";
			$isValid = false;
		}
		if(empty($doemail)) {
			$doemailErr = "Donor email can not be empty!";
			$isValid = false;
		}
		if(empty($dorgan)) {
			$dorganErr = "This part can not be empty!";
			$isValid = false;
		}
		
		if($isValid) {
			$id = test_input($id);
			$doname = test_input($doname);
			$doemail = test_input($doemail);
			$dorgan = test_input($dorgan);
			
			if(empty($fileData)) {
			$data[] = array("id" => $id,"doname" => $doname, "doemail" => $doemail, "dorgan" => $dorgan);
			}
			else {
			$data[] = json_decode($fileData);
			array_push($data, array("id" => $id,"doname" => $doname, "doemail" => $doemail, "dorgan" => $dorgan));
			
			}
			$data_encode = json_encode($data, true);
			write("");
            $response = write($data_encode);
			if($response) {
				$successfulMessage = "Donation Succesfully Complete!.";
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
	<title>Donate Organ</title>
</head>
<body>

	<h1>Donate Organ</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Donate Organ:</legend>
			
			<label for="id">ID:</label>
			<input type="text" id="id" name="id" value="<?php echo $id; ?>">
			<span style="color: red;"><?php echo $idErr; ?></span>
			<br><br>

			<label for="fname">Donor Name:</label>
			<input type="text" id="doname" name="doname" value="<?php echo $doname; ?>">
			<span style="color: red;"><?php echo $donameErr; ?></span>
			<br><br>

			<label for="lname">Donor Email:</label>
			<input type="text" id="doemail" name="doemail" value="<?php echo $doemail; ?>">
			<span style="color: red;"><?php echo $doemailErr; ?></span>
			<br><br>
			
			<label for="dorgan">Donate Organ:</label>
			<select id="dorgan" name="dorgan">
			<option value="">Catagory</option>
			<option value="Eye">Eye</option>
			<option value="Kidney">Kidney</option>
			<option value="Liver">Liver</option>
			<option value="Lungs">Lungs</option>
			<span style="color: red;"><?php echo $dorganErr; ?></span>
			</select>
			<br><br>

			
			
			<input type="submit" name="submit" value="Donate Organ">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Donated?Go to View Your Donate List<br><a href="index3.php">Go</a></p>
	<p align=center><br><a href="index.php">Home Page</a></p>

</body>
</html>