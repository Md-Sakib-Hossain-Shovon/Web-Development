<?php
require 'users4.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
   

    <table class="table">
        <thead>
        <tr>
            <th>Donor Name:</th>
            <th>Age:</th>
            <th>Blood Group:</th>
            <th>Email:</th>
			<th>Actions:</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                
              
                <td><?php echo $user['donorname'] ?></td>
                <td><?php echo $user['dage'] ?></td>
                <td><?php echo $user['dbloodgroup'] ?></td>
				<td><?php echo $user['demail'] ?></td> 				
                <td>
                    <a href="viewdonor.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a><br>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
	
</div>

<?php include 'partials/footer.php' ?><br>
<p align=center>Already Searched?Go to Previous Page<br><a href="searchdonor.php">Go</a></p>

