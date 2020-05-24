<?php include "includes/db.php" ?>
<?php

function readData() {
    global $connection;

    if (isset($_POST['read'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM myusers ";
        $result = mysqli_query($connection, $query);

        while ($fetchRows = mysqli_fetch_assoc($result)) {
            print_r($fetchRows);
        }
    }
}


function showData() {
    global $connection;

    $query = "SELECT * FROM myusers ";
    $result = mysqli_query($connection, $query);

    while ($selections = mysqli_fetch_assoc($result)) {
        $output = $selections['myUsername'];
        echo "<option value='$output'>$output</option>";
    }
}

?>