<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update Patient Profile: <b><?php echo $user['uname'] ?></b>
                
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                
                <div class="form-group">
                    <label>Username:</label>
                    <input name="uname" value="<?php echo $user['uname'] ?>"
                           class="form-control <?php echo $errors['uname'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['uname'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
               
                
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
