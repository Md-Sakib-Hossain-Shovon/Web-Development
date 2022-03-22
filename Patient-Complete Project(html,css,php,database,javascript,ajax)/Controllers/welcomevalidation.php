<?php
require '../Models/dbConnect.php';
require '../Models/dbRead.php';
require '../Models/dbDelete.php';
require 'table.css';

$successfulMessage =$errorMessage ="";
$uname = empty($_GET['uname']) ? "" : $_GET['uname'];
if (empty($uname)) {
	$userList = getAllUsers();
}
else {
    $userList = getUser($uname);
}

if(!empty($_GET['id']) and !empty($_GET['uname'])){
	$response = removeUser($_GET['id'],$_GET['uname']);
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

   // echo "<h1>User List</h1>";
   

    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Religion</th>";
    echo "<th>Date of Birth</th>";
	echo "<th>Action</th>";
    echo "</tr>";
    for ($i = 0; $i < count($userList); $i++) {
        echo "<tr>";
        echo "<td>" . $userList[$i]['id'] . "</td>";
        echo "<td>" . $userList[$i]['fname'] . "</td>";
        echo "<td>" . $userList[$i]['lname'] . "</td>";
        echo "<td>" . $userList[$i]['uname'] . "</td>";
        echo "<td>" . $userList[$i]['email'] . "</td>";
        echo "<td>" . $userList[$i]['religion'] . "</td>";
        echo "<td>" . $userList[$i]['dob'] . "</td>";
		echo "<td><a href = '" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"]. "&uname=" . $userList[$i]["uname"] . "'>Delete</a></td>";
	
		echo "</tr>";
		
    }

	echo "</table>";
}
else {
	echo "No Record Found";
}
	

    //echo "<h3>No User has been found!!!</h3>";


?>

