<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_sup = $_GET['id_sup'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM t_supplier WHERE id_sup=$id_sup");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_barangmasuk.php");
?>