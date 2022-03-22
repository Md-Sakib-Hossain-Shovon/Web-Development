<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	
	<?php
	define("filepath", "data.txt");
	
$fnameErr = "";
$fname = "";
$lnameErr = "";
$lname = "";
$gender="";
$genderErr="";
$dob="";
$dobErr="";
$religion="";
$religionErr="";
$email="";
$emailErr="";
$uname="";
$unameErr="";
$pass="";
$passErr="";
$successfulMessage = $errorMessage = "";

if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['fname'])) {
$fnameErr = "First Name Is Required!";
}
else {
$fname = test_input($_POST['fname']);
}

if(empty($_POST['lname'])) {
$lnameErr = "Last Name Is Required!";
}
else {
$lname = test_input($_POST['lname']);
}
if(empty($_POST['gender'])) {
$genderErr = "Gender Selection Is Required!";
}
else {
$gender = test_input($_POST['gender']);
}
if(empty($_POST['dob'])) {
$dobErr = "Dob Is Required!";
}
else {
$dob = test_input($_POST['dob']);
}
if(empty($_POST['religious'])) {
$religiousErr = "Religious Is Required!";
}
else {
$religious = test_input($_POST['religious']);
}
if(empty($_POST['email'])) {
$emailErr = "Email Is Required!";
}
else {
$email = test_input($_POST['email']);
}
if(empty($_POST['uname'])) {
$unameErr = "Userame Is Required!";
}
else {
$uname = test_input($_POST['uname']);
}
if(empty($_POST['pass'])) {
$passErr = "Password Is Required!";
}
else {
$pass = test_input($_POST['pass']);
}

if(empty($fileData)) {
$data[] = array("fname" => $fname, "lname" => $lname, "gender" => $gender, "dob"=> $dob, "religion"=> $religion, "email"=> $email, "uname"=> $uname, "pass"=> $pass);
}
else {
$data[] = json_decode($fileData);
array_push($data, array("fname" => $fname, "lname" => $lname, "gender" => $gender, "dob"=> $dob, "religion"=> $religion, "email"=> $email, "uname"=> $uname, "pass"=> $pass));
}
$data_encode = json_encode($data, true);
write("");
$result1 = write($data_encode);
if($result1) {
$successfulMessage = "Successfully saved.";
}
else {
$errorMessage = "Error while saving.";
}
}

function write($content) {
$resource = fopen(filepath, "w");
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

	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	
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
			<span style="color: red;"><?php echo $religiousErr; ?></span>
			
		</select>

		<br><br>
		
		
		<legend>Contact Information:</legend>
		
		<label for="padress">Present Adress:</label>
		<input type="text" id="padress" name="padress">
		<br><br>
		
		<label for="padress">Permanent Adress:</label>
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