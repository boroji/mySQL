<?php include "includes/db.php" ?>
<?php

function updateData() {
    global $connection;

    if (isset($_POST['update'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $user = mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);

        $hash = "$2y$10$";
        $salt = "LetsWrite22Characterzz";
        $hash_salt = $hash . $salt;

        $pass = crypt($pass, $hash_salt);
        
        $id = $_POST['id'];

        $query = "UPDATE myusers SET myUsername = '$user', myPassword = '$pass' WHERE myUsername = '$id' ";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo
                "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Record has failed to update
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
        } else {
            echo
                "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Record updated
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
        }
    }
}

?>