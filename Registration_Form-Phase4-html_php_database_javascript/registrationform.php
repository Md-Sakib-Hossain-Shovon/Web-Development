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

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="registrationform" onsubmit="return isvalid()">
	
		<fieldset>	
		
		<legend>Basic Information:</legend>
		
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
		<span style="color: red;" id="fnameErr"><?php echo $fnameErr; ?></span>
		<br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
		<span style="color: red;" id="lnameErr"><?php echo $lnameErr; ?></span>
		<br><br>

		<p>Gender:</p>
		<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
		<span style="color: red;" id="genderErr"><?php echo $genderErr; ?></span>
		<br><br>
		
		<p>DoB:</p>
		<input type="date" id="date"  name="dob" value="<?php echo $dob; ?>">
		<span style="color: red;" id="dobErr"><?php echo $dobErr; ?></span>
		<br><br>
						
		<label for="religion">Religion:</label>
		<select id="religion" name="religion">
			<option disabled selected value = "default">Select A Option</option>
			<option value="Islam">Islam</option>
			<option value="Christian">Christian</option>
			<span style="color: red;" id="religionErr"><?php echo $religionErr; ?></span>
			
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
		<span style="color: red;" id="emailErr"><?php echo $emailErr; ?></span>
		<br><br>
		
		<p>Personal Website Link:</p>
		<a href="www.facebook.com">Demo</a><br>
		<br><br>
		
		
	    <legend>Account Information:</legend>
		
		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
		<span style="color: red;" id="unameErr"><?php echo $unameErr; ?></span>
		<br><br>

		<label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>">
		<span style="color: red;" id="passErr"><?php echo $passErr; ?></span>
		<br><br>

		
		

		<input type="submit" value="Submit">
		</fieldset>
	</form>
	<br>
	 <span style="color: green;"><?php echo $successfulMessage; ?></span>
     <span style="color: red;"><?php echo $errorMessage; ?></span>
	 
	<script>
		function isvalid() {
			var flag = true;
			var fnameErr = document.getElementById("fnameErr");
			var lnameErr = document.getElementById("lnameErr");
			var genderErr = document.getElementById("genderErr");
			var dobErr = document.getElementById("dobErr");
			var religionErr = document.getElementById("religionErr");
			var emailErr = document.getElementById("emailErr");
			var unameErr = document.getElementById("unameErr");
			var passErr = document.getElementById("passErr");
			
			var fname = document.forms["registrationform"]["fname"].value;
			var lname = document.forms["registrationform"]["lname"].value;
			var gender = document.forms["registrationform"]["gender"].value;
			var dob = document.forms["registrationform"]["dob"].value;
			var religion = document.forms["registrationform"]["religion"].value;
			var email = document.forms["registrationform"]["email"].value;
			var uname = document.forms["registrationform"]["uname"].value;
			var pass = document.forms["registrationform"]["pass"].value;
			
			fnameErr.innerHTML= "";
			lnameErr.innerHTML = "";
			genderErr.innerHTML = "";
			dobErr.innerHTML = "";
			religionErr.innerHTML = "";
			emailErr.innerHTML = "";
			unameErr.innerHTML = "";
			passErr.innerHTML = "";

			if(fname === ""){
				flag = false;
				fnameErr.innerHTML= "Please fill up the first name";
			}
			if(lname=== "") {
				flag = false;
				lnameErr.innerHTML = "please fill up the last name";
			}
			if(gender=== "") {
				flag = false;
				genderErr.innerHTML = "please fill up the gender name";
			}
			if(dob=== "") {
				flag = false;
				dobErr.innerHTML = "please fill up the dob name";
			}
			if(religion=== "") {
				flag = false;
				religionErr.innerHTML = "please fill up the religion name";
			}
			if(email=== "") {
				flag = false;
				emailErr.innerHTML = "please fill up the email";
			}
			if(uname=== "") {
				flag = false;
				unameErr.innerHTML = "please fill up the user name";
			}
			if(pass=== "") {
				flag = false;
				passErr.innerHTML = "please fill up the password";
			}
			return flag;
		}
	</script> 

</body>
</html>