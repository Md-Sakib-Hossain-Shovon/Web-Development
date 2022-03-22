
<html>
<body>
<form>
<fieldset>
<h3 style="text-align:center">Patient Profile</h3>
<center><img src="sakib.jpg" alt="PP"  width="250" height="200" class="center"><br></center>
<?php

session_start();
if (empty($_SESSION['id'])) {
    header("Location: ./login.php");
}
$user = $_SESSION['id'];
?>
<html>
<head>
    <title>Welcome Page</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src=".js/js-search-user.js"></script>
	<script>
	fetch();
	</script>
		
	
</head>

<body>
 
        <h2><p align=center>Welcome<span style="color: green;"> <?php echo $user ?></span></p></h2>
		<form action="../Controllers/welcomevalidation.php" method="GET" name="mForm" onsubmit = "getData(this);return false;">
		   
		</form>
	<br>	

    <div id="result"></div>
</body>
</html>


<table style="width:100%">
  <tr>
   <th  style="background-color:LightGray;"> <p align=center>Doctor</p></th>
  </tr>
 
  <tr>
    <td><p align=center><a href="doctor.php">Search & View </a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Appointment</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="bookappointment.php">Book,View & Cancle</a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Organ</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="donateorgan.php">Donate,View & Cancle</a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Donor</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="donor.php">Search & View </a></p>
	</td> 
  </tr>
  
</table>
</fieldset>
</form>
</body>
</html>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Login Page<br><a href="login.php">Return</a></p>
<p align=center><br><a href="logout.php">Logout</a></p>


