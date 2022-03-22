<?php
require "../Models/dbAdd1.php";
session_start();
	
$docnameErr = "";
$docname = "";
$specializedinErr = "";
$specializedin = "";
$availabletime="";
$availabletimeErr="";
$successfulMessage = $errorMessage = "";

$emptyField = false;
$Message = "";
$MessageColor = 'green';

if($_SERVER['REQUEST_METHOD'] === "POST")
{
	
if(empty($_POST['docname'])) {
$docnameErr = "Doctor Name Is Required!";
}
else {
$docname = test_input($_POST['docname']);
}

if(empty($_POST['specializedin'])) {
$specializedinErr = "Specialized Field Is Required!";
}
else {
$specializedin = test_input($_POST['specializedin']);
}
if(empty($_POST['availabletime'])) {
$availabletimeErr = "Time Selection Is Required!";
}
else {
$availabletime = test_input($_POST['availabletime']);
}

if (!$emptyField) {
            $response = insertUser($docname, $specializedin, $availabletime);
            if ($response) {

                $Message = "Appointment Successfull!!!";
				header("Location: appointment.php");
            } else {
                $Message = "Appointment Failed!!!!";
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