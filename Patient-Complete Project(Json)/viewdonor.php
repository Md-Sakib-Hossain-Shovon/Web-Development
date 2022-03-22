<?php
include 'partials/header.php';
require __DIR__ . '/users4.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Donor Profile:</h3>
        </div>
        
        <table class="table">
            <tbody>
            <tr>
                <th>Donor Name:</th>
                <td><?php echo $user['donorname'] ?></td>
            </tr>
            <tr>
                <th>Donor Age:</th>
                <td><?php echo $user['dage'] ?></td>
            </tr>
            <tr>
                <th>Donor Blood Group:</th>
                <td><?php echo $user['dbloodgroup'] ?></td>
            </tr>
			<tr>
                <th>Donor Email:</th>
                <td><?php echo $user['demail'] ?></td>
            </tr>
            
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?><br>

<p align=center>Already Viewed?Return to Previous Page<br><a href="index4.php">Back</a></p>

