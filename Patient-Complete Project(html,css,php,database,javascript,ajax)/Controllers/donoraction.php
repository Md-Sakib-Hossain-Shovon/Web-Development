<?php
require '../Models/dbConnect.php';
require '../Models/dbReadDonor.php';
require 'table.css';

$doname = empty($_GET['doname']) ? "" : $_GET['doname'];

if(empty($doname)) {
	
	$userList=getAllUsers();
}
else {
	
	echo $doname;
	
	$userList=getUser($doname);
	
}
if(count($userList) > 0) {
	
	echo "<table>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Donor Name</th>";
	echo "<th>Donor Email</th>";
	echo "<th>Organ</th>";
	echo "</tr>";
	for ($i = 0; $i < count($userList); $i++) {
		echo "<tr>";
		echo "<td>" . $userList[$i]["id"]."</td>";
		echo "<td>" . $userList[$i]["doname"]. "</td>";
		echo "<td>" . $userList[$i]["doemail"]. "</td>";
		echo "<td>" . $userList[$i]["dorgan"]. "</td>";
	}
	echo "</table>";
}

?>
<?php include '../View/partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Previous Page<br><a href="../View/donor.php">Return</a></p>