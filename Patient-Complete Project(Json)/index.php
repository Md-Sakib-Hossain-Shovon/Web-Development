<?php
require 'users.php';

$users = getUsers();

include 'partials/header.php';
?>
<html>
<body>
<form>
<fieldset>
<h3 style="text-align:center">Patient Profile</h3>
<center><img src="sakib.jpg" alt="PP"  width="250" height="200" class="center"><br></center>


<div class="container">
   

    <table class="table">
        <thead>
        <tr>
            <th>Username:</th>
            <th>Email:</th>
            <th>Phone:</th>
            <th>Actions:</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                
              
                <td><?php echo $user['uname'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>              
                <td>
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<table style="width:100%">
  <tr>
   <th  style="background-color:LightGray;"> <p align=center>Doctor</p></th>
  </tr>
 
  <tr>
    <td><p align=center><a href="searchdoctor.php">Search & View </a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Appointment</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="bookappointment.php">Book,View & Cancle</a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Organ</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="donateorgan.php">Donate,View & Cancle</a></p>
	</td> 
  </tr>
  
  <tr>
  <th  style="background-color:LightGray;"><p align=center>Donor</p></th>
  </tr>
  
  <tr>
    <td><p align=center><a href="searchdonor.php">Search & View </a></p>
	</td> 
  </tr>
  
</table>
</fieldset>
</form>
</body>
</html>
<?php include 'partials/footer.php' ?><br>
<p align=center>Already Viewed?Return To Login Page<br><a href="login.php">Return</a></p>
<p align=center><br><a href="logout.php">Logout</a></p>


