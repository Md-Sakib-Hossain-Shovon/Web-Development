
<html>
<head>
<title>Doctor List</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="./js/ajax.js"></script>
</head>
<body>
<h2>Doctor List</h2>
<hr>
<form action="../Controllers/doctoraction.php "method="GET" name="mForm" onsubmit="getData(this); return false;">
<input type="text" name="docname">
<input type="submit" name="search" value="Search">
</form>
<br>
<div id="result"></div>

</body>
</html>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Home Page<br><a href="index.php">Return</a></p>
