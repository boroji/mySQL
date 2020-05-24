<?php include "includes/db.php" ?>
<?php

function createData() {
    global $connection;

    if (isset($_POST['create'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $query = "INSERT INTO myusers(myUsername, myPassword) VALUES ('$user','$pass') ";
        $result = mysqli_query($connection, $query);


        if (!($user && $pass)) {
            echo
                "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Username and Password cannot be empty
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
        } else {
            if (!$result) {
                echo
                    "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Username and Password successfully entered
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
            } else {
                echo
                    "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Username and Password successfully entered
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

                ";
            }
        }

        
    }
}

?>