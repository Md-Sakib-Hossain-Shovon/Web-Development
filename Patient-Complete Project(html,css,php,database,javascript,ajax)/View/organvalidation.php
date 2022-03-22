<?php
require '../Models/dbConnect.php';
require '../Models/dbRead2.php';
require '../Models/dbDelete2.php';
require 'table.css';

$successfulMessage =$errorMessage ="";
$uname = empty($_GET['doname']) ? "" : $_GET['doname'];
if (empty($doname)) {
	$userList = getAllUsers();
}
else {
    $userList = getUser($doname);
}

if(!empty($_GET['id']) and !empty($_GET['doname'])){
	$response = removeUser($_GET['id'],$_GET['doname']);
	if($response)
	{
		$userList = getAllUsers();
		$successfulMessage = "";
	}
	else{
		$errorMessage = "Unsucessful";
	}
}
	
if (count($userList) > 0) {
   

    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Donor Name</th>";
    echo "<th>Donor Email</th>";
    echo "<th>Organ</th>";
	echo "<th>Action</th>";
    echo "</tr>";
    for ($i = 0; $i < count($userList); $i++) {
        echo "<tr>";
        echo "<td>" . $userList[$i]['id'] . "</td>";
        echo "<td>" . $userList[$i]['doname'] . "</td>";
        echo "<td>" . $userList[$i]['doemail'] . "</td>";
        echo "<td>" . $userList[$i]['dorgan'] . "</td>";

		echo "<td><a href = '" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"]. "&doname=" . $userList[$i]["doname"] . "'>Delete</a></td>";
	
		echo "</tr>";
		
    }

	echo "</table>";
}
else {
	echo "No Record Found";
}
	


?>

<html>
<body>
<br>
<span style ="color: green;"><?php echo $successfulMessage;?></span>
<span style ="color: red;"><?php echo $errorMessage;?></span>

</body>
</html>



