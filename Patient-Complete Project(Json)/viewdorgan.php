<?php
include 'partials/header.php';
require __DIR__ . '/users3.php';

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
            <h3>Donated Organ:</h3>
        </div>
        <div class="card-body">
            <form style="display: inline-block" method="POST" action="cancledorgan.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Cancle</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Donor Name:</th>
                <td><?php echo $user['doname'] ?></td>
            </tr>
            <tr>
                <th>Donor Email:</th>
                <td><?php echo $user['doemail'] ?></td>
            </tr>
            <tr>
                <th>Organ:</th>
                <td><?php echo $user['dorgan'] ?></td>
            </tr>
            
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Go to View Your Donate List<br><a href="index3.php">Go</a></p>

