<?php 
	require './Models/dbGetusers.php';
	session_start();
	$uname="";
	$unameErr="";
	$pass="";
	$passErr="";
	//$flag=FALSE;
	$emptyField=FALSE;
	$Message = "";
	$user;

	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		if(empty($_POST['uname'])) {
		$unameErr = "Username Is Required!";
		}
		else {
		$uname =($_POST['uname']);
		}
		if(empty($_POST['pass'])) {
		$passErr = "Password Is Required!";
		}
		else {
		$pass =($_POST['pass']);
		}
		
		if (!$emptyField) {
            $response = getUser($uname, $pass);
			echo $response;
            if ($response) {
                $_SESSION['id'] = $uname;
               echo "succesfull";
			   header("Location: welcome.php");
            } else {
                $Message = "Login Failed!!!";
            }
        }
	}
?>