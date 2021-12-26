<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_staff = $_GET['id_staff'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM t_staff WHERE id_staff=$id_staff");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_staff.php");
?>