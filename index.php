<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-group d-flex flex-column flex-lg-row">
                        <input class="btn btn-primary mb-3 mr-lg-3 mr-lg-0" type="submit" name="create" value="Create">
                        <input class="btn btn-secondary mb-3 mr-lg-3 mr-lg-0" type="submit" name="read" value="Read">
                        <input class="btn btn-success mb-3 mr-lg-3 mr-lg-0" type="submit" name="update" value="Update">
                        <input class="btn btn-danger mb-3 mr-lg-3 mr-lg-0" type="submit" name="delete" value="Delete">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php" ?>