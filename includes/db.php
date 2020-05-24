<?php 

$connection = mysqli_connect('localhost', 'root', '', 'mylogin');
$query = "SELECT * FROM myusers";
$result = mysqli_query($connection, $query);

if (!$result) {
    echo 
    "
    <div class='alert alert-danger'>
       Database is not connected
    </div>

    ";
} else {
    echo
        "
    <div class='alert alert-success'>
       We are connected
    </div>

    "; 
}


?>