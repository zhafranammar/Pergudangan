<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_ged = $_GET['id_ged'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM t_gedung WHERE id_ged=$id_ged");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_gedung.php");
?>