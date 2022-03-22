<?php
require '../Models/dbConnect.php';
require '../Models/dbRead1.php';
require '../Models/dbDelete1.php';
require 'table.css';
$successfulMessage =$errorMessage ="";
$uname = empty($_GET['docname']) ? "" : $_GET['docname'];
if (empty($docname)) {
	$userList = getAllUsers();
}
else {
    $userList = getUser($docname);
}

if(!empty($_GET['id']) and !empty($_GET['docname'])){
	$response = removeUser($_GET['id'],$_GET['docname']);
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
    echo "<th>Doctor Name</th>";
    echo "<th>Specialized_In</th>";
    echo "<th>Available_Time</th>";
	echo "<th>Action</th>";
    echo "</tr>";
    for ($i = 0; $i < count($userList); $i++) {
        echo "<tr>";
        echo "<td>" . $userList[$i]['id'] . "</td>";
        echo "<td>" . $userList[$i]['docname'] . "</td>";
        echo "<td>" . $userList[$i]['specializedin'] . "</td>";
        echo "<td>" . $userList[$i]['availabletime'] . "</td>";

		echo "<td><a href = '" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"]. "&docname=" . $userList[$i]["docname"] . "'>Delete</a></td>";
	
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



