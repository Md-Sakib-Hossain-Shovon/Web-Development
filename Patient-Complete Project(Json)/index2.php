<?php
require 'users2.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
   

    <table class="table">
        <thead>
        <tr>
            <th>Doctor Name:</th>
            <th>Hospital Name:</th>
            <th>Specialized In:</th>
            <th>Available Time:</th>
			<th>Actions:</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                
              
                <td><?php echo $user['docname'] ?></td>
                <td><?php echo $user['hosname'] ?></td>
                <td><?php echo $user['specializedin'] ?></td>
				<td><?php echo $user['availabletime'] ?></td> 				
                <td>
                    <a href="viewappointment.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <form method="POST" action="cancleappointment.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Cancle</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>
<p align=center>Already Viewed?Go to Previous Page<br><br><a href="bookappointment.php">Back</a><p>

