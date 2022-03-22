<?php
	require_once "models/db_config.php";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$has_error=false;
	if(isset($_POST["signup"])){
		if(empty($_POST["name"])){
			$err_name="<br> name required";
			$has_error=true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_username="<br> username required";
			$has_error=true;
		}
		else{
			$username=$_POST["uname"];
		}
		if(empty($_POST["email"])){
			$err_email="<br> email required";
			$has_error=true;
		}
		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["pass"])){
			$err_password="<br> password required";
			$has_error=true;
		}
		else{
			$password=$_POST["pass"];
		}
		if(!$has_error){
			insertuser($name,$username,$email,$password);
			echo "User inserted successfully";
			
			
		}
	}
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_username="<br> Username Required";
			$has_error=true;
		}
		else{
			$username=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_password="<br> password required";
			$has_error=true;
		}
		else{
			$password=$_POST["pass"];
		}
		if(!$has_error){
			if(authenticateuser($username,$password)){
				header("Location:dashboard.php");
			}
			echo "Invalid username or password";
		}
	}
	function insertuser($name,$uname,$email,$password){
		$query="insert into user values(NULL,'$name','$uname','$email','$password')";
		execute($query);
	}
	function authenticateuser($username,$password){
		$query="select * from user where Username='$username' and Password='$password'";
		$result=get($query);
		if(count($result)>0){
			return $result[0];
		}
		return false;
	}
?>