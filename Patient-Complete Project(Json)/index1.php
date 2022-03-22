<?php
require 'users1.php';

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
                    <a href="viewdoctor.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a><br>
                    
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
	
</div>

<?php include 'partials/footer.php' ?>
<p align=center>Already Viewed?Go to Previous Page<br><a href="searchdoctor.php">Back</a></p>


