<?php
require "../Controllers/bappvalidation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointment Form</title>
</head>
<body>
	<h1>Book Appointment</h1>

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="bookappointmentform" onsubmit="return isvalid()">
	
		<fieldset>	
        <table align="center" class "text">
		<tr>
		<td><label for="docname">Doctor Name:</label></td>
		<td><input type="text" id="docname" name="docname" value="<?php echo $docname; ?>">
		<span style="color: red;"><?php echo $docnameErr; ?></span>
		</td>	
		</tr>
		

		</tr>
				

		<tr>			
		<td><label for="specializedin">Specialized In:</label></td>
		<td><select id="specializedin" name="specializedin">
			<option disabled selected value = "default">Select</option>
			<option value="Neurology">Neurology</option>
			<option value="Cardiology">Cardiology</option>
			<option value="Medicine">Medicine</option>
			<option value="Endocrinology">Endocrinology</option>
		</select></td>
		<span style="color: red;" id="specializedinErr"><?php echo $specializedinErr; ?></span>
		</td>
		</tr>
		
		
		<tr>
		<td><label for="availabletime">Available Time:</label>
		<td><input type="text" name="availabletime" id="availabletime">
		<span style="color:red"><?php echo $availabletimeErr; ?></span>
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
	 

	<script src="../Controllers/js/jsbappvalidation.js"></script>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Booked?Go to Appointment Page<br><a href="appointment.php">Go</a></p>
	<p align=center><br><a href="index.php">Return</a></p>


</body>
</html>

			