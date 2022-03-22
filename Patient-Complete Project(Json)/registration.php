<?php 
	define("filepath", "users.json");
	$fname = $lname = $regno = $uname = $pass = $cpass = $email = $phone = $dob = $gender = $bgroup = $id ="";
	$isValid = true;
	$fnameErr = $lnameErr = $regnoErr = $unameErr = $passErr = $cpassErr = $emailErr = $phoneErr = $dobErr = $genderErr = $bgroupErr = $idErr ="";
	$successfulMessage = $errorMessage = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$regno = $_POST['regno'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$gender= $_POST['gender'];
		$bgroup = $_POST['bgroup'];
		if(empty($id)) {
			$idErr = "Id must be given!";
			$isValid = false;
		}
		if(empty($fname)) {
			$fnameErr = "First name can not be empty!";
			$isValid = false;
		}
		if(empty($lname)) {
			$lnameErr = "Last name can not be empty!";
			$isValid = false;
		}
		if(empty($regno)) {
			$regnoErr = "Refistration number can not be empty!";
			$isValid = false;
		}
		if(empty($uname)) {
			$unameErr = "Username name can not be empty!";
			$isValid = false;
		}
		if(empty($pass)) {
			$passErr = "Password can not be empty!";
			$isValid = false;
		}
		if(empty($cpass)) {
			$cpassErr = "Confirm password can not be empty!";
			$isValid = false;
		}
		if(empty($email)) {
			$emailErr = "Email can not be empty!";
			$isValid = false;
		}
		if(empty($phone)) {
			$phoneErr = "Phone number can not be empty!";
			$isValid = false;
		}
		if(empty($dob)) {
			$dobErr = "Date Of birth can not be empty!";
			$isValid = false;
		}
		if(empty($gender)) {
			$genderErr = "Gender can not be empty!";
			$isValid = false;
		}
		if(empty($bgroup)) {
			$bgroupErr = "Blood group can not be empty!";
			$isValid = false;
		}
		if($isValid) {
			$id = test_input($id);
			$fname = test_input($fname);
			$lname = test_input($lname);
			$regno = test_input($regno);
			$uname = test_input($uname);
			$pass = test_input($pass);
			$cpass = test_input($cpass);
			$email = test_input($email);
			$phone = test_input($phone);
			$dob = test_input($dob);
			$gender = test_input($gender);
			$bgroup = test_input($bgroup);

			/*
			$arr1 = array("fname" => $fname, "lname" => $lname, "regno" => $regno, "uname" => $uname, "pass" => $pass ,"cpass" => $cpass, "email"=> $email,"phone"=>$phone,"dob"=> $dob, "gender" => $gender, "bgroup"=> $bgroup);
			$arr1_encode = json_encode($arr1);
			$response = write($arr1_encode);
			*/
			if(empty($fileData)) {
			$data[] = array("id" => $id,"fname" => $fname, "lname" => $lname, "regno" => $regno, "uname" => $uname, "pass" => $pass ,"cpass" => $cpass, "email"=> $email,"phone"=>$phone,"dob"=> $dob, "gender" => $gender, "bgroup"=> $bgroup);
			}
			else {
			$data[] = json_decode($fileData);
			array_push($data, array("id" => $id,"fname" => $fname, "lname" => $lname, "regno" => $regno, "uname" => $uname, "pass" => $pass ,"cpass" => $cpass, "email"=> $email,"phone"=>$phone,"dob"=> $dob, "gender" => $gender, "bgroup"=> $bgroup));
			
			}
			$data_encode = json_encode($data, true);
			write("");
            $response = write($data_encode);
			if($response) {
				$successfulMessage = "Registration Succesfull!.";
			}
			else {
				$errorMessage = "Refistration Failed!.";
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
	<title>Patient Registration</title>
</head>
<body>

	<h1>Patient Registration</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Patient Registration:</legend>
			<table align="center" class "text">
			
			<tr>
			
			<td><label for="id">ID:</label></td>
			<td><input type="text" id="id" name="id" value="<?php echo $id; ?>">
			<span style="color: red;"><?php echo $idErr; ?></span>
			</td>
			
			</tr>
			<tr>
			


			<td><label for="fname">First Name:</label></td>
			<td><input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
			<span style="color: red;"><?php echo $fnameErr; ?></span>
			</td>
			
			</tr>
			<tr>

			<td><label for="lname">Last Name:</label></td>
			<td><input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
			<span style="color: red;"><?php echo $lnameErr; ?></span>
			</td>
			
			</tr>
			<tr>
			
			<td><label for="regno">Reg No:</label></td>
			<td><input type="text" id="regno" name="regno" value="<?php echo $regno; ?>">
			<span style="color: red;"><?php echo $regnoErr; ?></span>
			</td>
			
			</tr>
			<tr>


			<td><label for="uname">Username:</label></td>
			<td><input type="text" name="uname" id="uname">
			<span style="color:red"><?php echo $unameErr; ?></span>

			</td>
			
			</tr>
			<tr>

		    <td><label for="pass">Password:</label></td>
			<td><input type="password" name="pass" id="pass">
			<span style="color:red"><?php echo $passErr; ?></span>

			</td>
			
			</tr>
			<tr>
			<td><label for="cpass">Confirm Password:</label></td>
			<td><input type="password" name="cpass" id="cpass">
			<span style="color:red"><?php echo $cpassErr; ?></span>

			</td>
			
			</tr>
			<tr>
			
			<td><label for="email">Email:</label></td>
			<td><input type="email" id="email" name="email" value="<?php echo $email; ?>">
			<span style="color: red;"><?php echo $emailErr; ?></span>
			</td>
			
			</tr>
			<tr>
		
			
			<td><label for="phone">Phone:</label></td>
			<td><input type="tel" id="phone" name="phone">
			<span style="color: red;"><?php echo $phoneErr; ?></span>
			</td>
			
			</tr>
			<tr>
			
			<td><p>Birth Date:</p></td>
			<td><input type="date" id="date"  name="dob" value="<?php echo $dob; ?>">
			<span style="color: red;"><?php echo $dobErr; ?></span>
			</td>
			
			</tr>
			<tr>
			
			<td><p>Gender:</p>
			<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
			<span style="color: red;"><?php echo $genderErr; ?></span>
			</td>
			
			</tr>
			<tr>
			
			<td><label for="bgroup">Blood Group:</label>
			<select id="bgroup" name="bgroup">
			<option value="A+">A+</option>
			<option value="AB+">AB+</option>
			<option value="O+">O+</option>
			<span style="color: red;"><?php echo $bgroupErr; ?></span>
			</select>
			</td><br>
			
			</tr>
			<tr>
			
			<td align="center" colspan="2"><input type="submit" name="submit" value="Register"></td>
			
			</tr>
			</table>
			
			
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>
	<?php include 'partials/footer.php' ?><br>
	<p align=center>Already Registered?Go to Login Page<br><a href="login.php">Go</a></p>

</body>
</html>
