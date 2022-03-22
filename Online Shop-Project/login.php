<?php include 'main_header.php';
	require_once "controllers/logincontroller.php";
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="POST" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="uname" class="form-control">
			<span><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="pass" class="form-control">
			<span><?php echo $err_password;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>