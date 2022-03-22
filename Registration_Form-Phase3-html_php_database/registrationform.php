<?php
require "./Controllers/regvalidation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return isValid()">
	
		<fieldset>	
		
		<legend>Basic Information:</legend>
		
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
		<span style="color: red;"><?php echo $fnameErr; ?></span>
		<br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
		<span style="color: red;"><?php echo $lnameErr; ?></span>
		<br><br>

		<p>Gender:</p>
		<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
		<span style="color: red;"><?php echo $genderErr; ?></span>
		<br><br>
		
		<p>DoB:</p>
		<input type="date" id="date"  name="dob" value="<?php echo $dob; ?>">
		<span style="color: red;"><?php echo $dobErr; ?></span>
		<br><br>
						
		<label for="religion">Religion:</label>
		<select id="religion" name="religion">
			<option value="Islam">Islam</option>
			<option value="Christian">Christian</option>
			<span style="color: red;"><?php echo $religionErr; ?></span>
			
		</select>

		<br><br>
		
		
		<legend>Contact Information:</legend>
		
		<label for="padress">Present Adress:</label>
		<input type="text" id="padress" name="padress">
		<br><br>
		
		<label for="peadress">Permanent Adress:</label>
		<input type="text" id="peadress" name="peadress">
		<br><br>
		
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone">
		<br><br>

		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $email; ?>">
		<span style="color: red;"><?php echo $emailErr; ?></span>
		<br><br>
		
		<p>Personal Website Link:</p>
		<a href="www.facebook.com">Demo</a><br>
		<br><br>
		
		
	    <legend>Account Information:</legend>
		
		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
		<span style="color: red;"><?php echo $unameErr; ?></span>
		<br><br>

		<label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;"><?php echo $passErr; ?></span>
		<br><br>

		
		

		<input type="submit" value="Submit">
		</fieldset>
	</form>
	<br>
	 <span style="color: green;"><?php echo $successfulMessage; ?></span>
     <span style="color: red;"><?php echo $errorMessage; ?></span>

</body>
</html>