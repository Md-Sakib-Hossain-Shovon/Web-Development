<?php
require "../Controllers/dorvalidation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donate Organ Form</title>
</head>
<body>
	<h1>Donate Organ</h1>

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="donateorganform" onsubmit="return isvalid()">
	
		<fieldset>	
        <table align="center" class "text">
		<tr>
		<td><label for="doname">Donor Name:</label></td>
		<td><input type="text" id="doname" name="doname" value="<?php echo $doname; ?>">
		<span style="color: red;"><?php echo $donameErr; ?></span>
		</td>	
		</tr>
				

		<tr>			
		<td><label for="doemail">Donor Email:</label></td>
		<td><input type="text" id="doemail" name="doemail" value="<?php echo $doemail; ?>">
		<span style="color: red;"><?php echo $doemailErr; ?></span>
		</td>
		</tr>
			
			
		<tr>
		<td>
		<label for="dorgan">Donate Organ:</label></td>
		<td><select id="dorgan" name="dorgan">
		<option value="">Select Organ</option>
		<option value="Eye">Eye</option>
		<option value="Kidney">Kidney</option>
		<option value="Liver">Liver</option>
		<option value="Lungs">Lungs</option>
		<span style="color: red;"><?php echo $dorganErr; ?></span>
		</select>
		</td>
		</tr>


		
		<tr>
		<td><input type="submit" value="Submit">
		</td>
		</tr>
		
		</table>
		</fieldset>
	</form>
	<br>
	 <span style="color: green;"><?php echo $successfulMessage; ?></span>
     <span style="color: red;"><?php echo $errorMessage; ?></span>
	 

	<script src="../Controllers/js/jsdorvalidation.js"></script>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Donated?Go to Donation Page<br><a href="organ.php">Go</a></p>
	<p align=center><br><a href="index.php">Return</a></p>


</body>
</html>