<?php
require 'users3.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
   

    <table class="table">
        <thead>
        <tr>
            <th>Donor Name:</th>
            <th>Donor Email:</th>
            <th>Organ:</th>
			<th>Actions:</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                
              
                <td><?php echo $user['doname'] ?></td>
                <td><?php echo $user['doemail'] ?></td>
                <td><?php echo $user['dorgan'] ?></td> 				
                <td>
                    <a href="viewdorgan.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a><br>
                    <form method="POST" action="cancledorgan.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Cancle</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Go to Previous Page<br><a href="donateorgan.php">Go</a></p>

