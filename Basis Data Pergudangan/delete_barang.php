<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_bar = $_GET['id_bar'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM t_barang WHERE id_bar=$id_bar");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_barang.php");
?>
