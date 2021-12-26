<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_distr = $_GET['id_distr'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM t_distributor WHERE id_distr=$id_distr");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_barangkeluar.php");
?>