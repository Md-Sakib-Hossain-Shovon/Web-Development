<?php
require '../Models/dbConnect.php';
require '../Models/dbReadDoctor.php';
require 'table.css';

$doname = empty($_GET['docname']) ? "" : $_GET['docname'];

if(empty($docname)) {
	
	$userList=getAllUsers();
}
else {
	
	echo $docname;
	
	$userList=getUser($docname);
	
}
if(count($userList) > 0) {
	
	echo "<table>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Doctor Name</th>";
	echo "<th>Hospital Name</th>";
	echo "<th>SpecializedIn</th>";
	echo "<th>Available Time</th>";
	echo "</tr>";
	for ($i = 0; $i < count($userList); $i++) {
		echo "<tr>";
		echo "<td>" . $userList[$i]["id"]."</td>";
		echo "<td>" . $userList[$i]["docname"]. "</td>";
		echo "<td>" . $userList[$i]["hosname"]. "</td>";
		echo "<td>" . $userList[$i]["specializedin"]. "</td>";
		echo "<td>" . $userList[$i]["availabletime"]. "</td>";
	}
	echo "</table>";
}

?>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Previous Page<br><a href="../View/doctor.php">Return</a></p>