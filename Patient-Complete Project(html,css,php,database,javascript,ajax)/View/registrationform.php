<?php
require "../Controllers/regvalidation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h1>Registration Form</h1>

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="registrationform" onsubmit="return isvalid()">
	
		<fieldset>	
        <table align="center" class "text">
		
		<tr>
		<td><legend>Basic Information:</legend></td>
		</tr>

		<tr>
		<td><label for="fname">First Name:</label></td>
		<td><input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
		<span style="color: red;"><?php echo $fnameErr; ?></span>
		</td>	
		</tr><br>
		
		<tr>

		<td><label for="lname">Last Name:</label></td>
		<td><input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
		<span style="color: red;"><?php echo $lnameErr; ?></span>
		</td>
			
		</tr>
		
		<tr>

		<td><p>Gender:</p></td>
		<td><input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
		<span style="color: red;" id="genderErr"><?php echo $genderErr; ?></span>
		</td>
		</tr>
		<tr>
		
		<td><p>DoB:</p></td>
		<td><input type="date" id="date"  name="dob" value="<?php echo $dob; ?>">
		<span style="color: red;" id="dobErr"><?php echo $dobErr; ?></span>
		</td>
		</tr>
				

		<tr>			
		<td><label for="religion">Religion:</label></td>
		<td><select id="religion" name="religion">
			<option disabled selected value = "default">Select A Option</option>
			<option value="Islam">Islam</option>
			<option value="Christian">Christian</option>
		</select></td>
		<span style="color: red;" id="religionErr"><?php echo $religionErr; ?></span>
		</td>
		</tr>
		
		<tr>
		<td>

	
		<legend>Contact Information:</legend>
		
		</td>
		</tr>
		
		<tr>
		<td><label for="padress">Present Adress:</label></td>
		<td><input type="text" id="padress" name="padress">
		</td>
		</tr>
		
		<tr>
		
		<td><label for="peadress">Permanent Adress:</label></td>
		<td><input type="text" id="peadress" name="peadress">
		</td>
		</tr>
		
		<tr>
		<td><label for="phone">Phone:</label></td>
		<td><input type="tel" id="phone" name="phone">
		</td>
		</tr>
		
		<tr>

		
		<td><label for="email">Email:</label></td>
		<td><input type="email" id="email" name="email" value="<?php echo $email; ?>">
		<span style="color: red;" id="emailErr"><?php echo $emailErr; ?></span>
		</td>
		</tr>
			
		<tr>

		
		<td><p>Personal Website Link:</p></td>
		<td><a href="www.facebook.com">Demo</a></td>
		</tr>

		<tr><td>
	    <legend>Account Information:</legend>
		</td>
		</tr>
		<tr>
		<td>
		<label for="uname">Username:</label></td>
		<td><input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
		<span style="color: red;" id="unameErr"><?php echo $unameErr; ?></span></td>
		</tr>
		
		<tr>
		<td>
		<label for="pass">Password:</label></td>
		<td><input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;" id="passErr"><?php echo $passErr; ?></span></td>
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
	 

	<script src="../Controllers/js/jsregvalidation.js"></script>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Registered?Go to Login Page<br><a href="login.php">Go</a></p>

</body>
</html>