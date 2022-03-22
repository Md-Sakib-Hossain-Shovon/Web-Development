<?php
require "../Models/dbAdd2.php";
	
$donameErr = "";
$doname = "";
$doemailErr = "";
$doemail = "";
$dorgan="";
$dorganErr="";
$successfulMessage = $errorMessage = "";

$emptyField = false;
$Message = "";
$MessageColor = 'green';

if($_SERVER['REQUEST_METHOD'] === "POST")
{
	
if(empty($_POST['doname'])) {
$donameErr = "Donor Name Is Required!";
}
else {
$doname = test_input($_POST['doname']);
}

if(empty($_POST['doemail'])) {
$doemailErr = "Email Is Required!";
}
else {
$doemail = test_input($_POST['doemail']);
}
if(empty($_POST['dorgan'])) {
$dorganErr = "Organ Field Is Required!";
}
else {
$dorgan = test_input($_POST['dorgan']);
}

if (!$emptyField) {
            $response = insertUser($doname, $doemail, $dorgan);
            if ($response) {
                $Message = "Donation Successfull!!!";
            } else {
                $Message = "Donation Failed!!!!";
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