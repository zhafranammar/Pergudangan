<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id_distr = $_POST['id_distr'];
	$nama_distr = $_POST['nama_distr'];
	$alamat = $_POST['alamat'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE t_distributor SET id_distr='$id_distr',nama_distr='$nama_distr',alamat='$alamat' WHERE id_distr=$id_distr");

	// Redirect to homepage to display updated user in list
	header("Location: home_barangkeluar.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_distr = $_GET['id_distr'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM t_distributor WHERE id_distr=$id_distr");

while ($user_data = mysqli_fetch_array($result)) {
	$id_distr = $user_data['id_distr'];
	$nama_distr = $user_data['nama_distr'];
	$alamat = $user_data['alamat'];
}
?>
<html>

<head>
	<title>Edit Data Barang Keluar</title>
	<!--Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<!-- Data Tables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<!-- Font Google -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<!-- Own CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<!-- Data Tables -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

	<!--Navbar-->
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="https://storaza.com/wp-content/uploads/2020/09/Logo-Storaza-Fix-300x213-1-300x213.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
				<a class="navbar-brand" href="index.php">Sistem Basis Data Pergudangan</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home_gedung.php">Data gedung</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home_staff.php">Data Staff</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home_barang.php">Data Barang</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home_barangmasuk.php">Data Barang Masuk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home_barangkeluar.php">Data Barang keluar</a>
						</li>
					</ul>
				</div>
			</a>
		</div>
	</nav>
	<!--Close Navbar-->

	<div class="container">
		<h3>Silahkan Perbarui Data</h3>
		<form name="update_user" method="post" action="edit_barangkeluar1.php">
			<table width="50%" border="0">
				<tr>
					<td>Id Distributor</td>
					<td><input type="text" name="id_distr" value=<?php echo $id_distr; ?>></td>
				</tr>
				<tr>
					<td>Nama Distributor</td>
					<td><input type="text" name="nama_distr" value=<?php echo $nama_distr; ?>></td>
				</tr>
				<tr>
					<td>Alamat Supplier</td>
					<td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" name="update" value="Update Data"></td>
				</tr>
			</table>
		</form>
		<a href="home_barangkeluar.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>
	</div>

</body>

</html>