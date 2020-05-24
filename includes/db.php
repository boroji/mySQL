<?php 

$connection = mysqli_connect('localhost', 'root', '', 'mylogin');
$query = "SELECT * FROM myusers";
$result = mysqli_query($connection, $query);

?>