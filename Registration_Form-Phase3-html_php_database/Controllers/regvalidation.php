<?php
require "./Models/dbAdd.php";
	
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
$padress="";
$peadress="";
$phone="";
$email="";
$emailErr="";
$pweblink="";
$uname="";
$unameErr="";
$pass="";
$passErr="";
$successfulMessage = $errorMessage = "";

$emptyField = false;
$Message = "";
$MessageColor = 'green';

define("filepath", "data.txt");

if($_SERVER['REQUEST_METHOD'] === "POST")
{
	
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
if(empty($_POST['religion'])) {
$religionErr = "Religious Is Required!";
}
else {
$religion = test_input($_POST['religion']);
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

if (!$emptyField) {
            $response = insertUser($fname, $lname, $gender, $dob, $religion, $padress, $peadress, $phone, $email, $pweblink, $uname, $pass);
            if ($response) {
                $Message = "Registration Successfull!!!";
            } else {
                $Message = "Registration Failed!!!!";
                $MessageColor = 'red';
            }
        }
		
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}	
?>