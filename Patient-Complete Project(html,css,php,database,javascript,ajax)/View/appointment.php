
<html>
<head>
    <title>Appointed List</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../Controllers/js/js-bookappointment.js"></script>
	<script>
	fetch();
	</script>
<body>
<fieldset>
<h2><p align=center>Appointed List<span style="color: green;">
<form action="../appointmentvalidation.php" method="GET" name="mForm" onsubmit = "getData(this);return false;">	   
<br>	
<div id="result"></div>
</fieldset>
</form>
</body>
</html>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Book Appointment Page<br><a href="bookappointment.php">Return</a></p>



