<?php
include 'partials/header.php';
require __DIR__ . '/users2.php';

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
            <h3>Your Booking:</h3>
        </div>
        <div class="card-body">
            <form style="display: inline-block" method="POST" action="cancleappointment.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Cancle</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Doctor Name:</th>
                <td><?php echo $user['docname'] ?></td>
            </tr>
            <tr>
                <th>Hospital Name:</th>
                <td><?php echo $user['hosname'] ?></td>
            </tr>
            <tr>
                <th>Specialized In:</th>
                <td><?php echo $user['specializedin'] ?></td>
            </tr>
			<tr>
                <th>Available Time:</th>
                <td><?php echo $user['availabletime'] ?></td>
            </tr>
            
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Go to Previous Page<br><br><a href="index2.php">Back</a><p>
