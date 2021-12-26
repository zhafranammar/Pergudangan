<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_pemasokan_supplier = $_GET['id_pemasokan_supplier'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM pemasokan_supplier WHERE id_pemasokan_supplier=$id_pemasokan_supplier");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home_barangmasuk.php");
?>