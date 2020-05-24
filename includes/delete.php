<?php include "includes/db.php" ?>
<?php

function deleteData() {
    global $connection;

    if (isset($_POST['delete'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $user = mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);

        
        $id = $_POST['id'];

        $query = "DELETE FROM myusers WHERE myUsername = '$id' ";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo
                "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Cannot delete the record
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
        } else {
            echo
                "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    Record deleted successfully
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
        }
    }
}

?>