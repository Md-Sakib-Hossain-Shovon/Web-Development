<?php
require "./../../ajax/Models/dbConnect.php";
require "./../../ajax/Controllers/Database/dbGetAllUsers.php";
require "./../../ajax/Models/dbGetUser.php";
$username = $_GET['uname'];
if (empty($uname)) {
    echo "<h3>Input Username</h3>";
    return;
} else {
    $userList = getUser($uname);
}

if (count($userList) > 0) {

    echo "<h1>User List</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Religion</th>";
    echo "<th>Date of Birth</th>";
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
    }
} else {
    echo "<h3>No User has been found!!!</h3>";
}

?>
</table>