
<html>
<head>
    <title>Donation History</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../Controllers/js/js-donateorgan.js"></script>
	<script>
	fetch();
	</script>

<body>
<fieldset>
<h2><p align=center>Donation History<span style="color: green;">
<form action="../organvalidation.php" method="GET" name="mForm" onsubmit = "getData(this);return false;">		   
</form>
<br>	
<div id="result"></div>
</fieldset>
</form>
</body>
</html>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Book Donate Page<br><a href="donateorgan.php">Return</a></p>


