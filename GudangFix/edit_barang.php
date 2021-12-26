<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id_bar = $_POST['id_bar'];
	$id_ged = $_POST['id_ged'];
	$nama_bar = $_POST['nama_bar'];
	$jenis = $_POST['jenis'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE t_barang SET id_bar='$id_bar',id_ged='$id_ged',nama_bar='$nama_bar',  jenis = '$jenis', stok = '$stok', harga = '$harga' WHERE id_bar=$id_bar");

	// Redirect to homepage to display updated user in list
	header("Location: home_barang.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_bar = $_GET['id_bar'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM t_barang WHERE id_bar=$id_bar");

while ($user_data = mysqli_fetch_array($result)) {
	$id_bar = $user_data['id_bar'];
	$id_ged = $user_data['id_ged'];
	$nama_bar = $user_data['nama_bar'];
	$jenis = $user_data['jenis'];
	$stok = $user_data['stok'];
	$harga = $user_data['harga'];
}
?>
<html>

<head>
	<title>Edit Data Barang</title>
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
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
		<form name="update_user" method="post" action="edit_barang.php">
			<table width="50%" border="0">
				<tr>
					<td>Id Barang</td>
					<td><input type="text" name="id_bar" value=<?php echo $id_bar; ?>></td>
				</tr>
				<tr>
					<td>Id Gedung</td>
					<td><input type="text" name="id_ged" value=<?php echo $id_ged; ?>></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="nama_bar" value=<?php echo $nama_bar; ?>></td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td><input type="text" name="jenis" value=<?php echo $jenis; ?>></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" value=<?php echo $stok; ?>></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value=<?php echo $harga; ?>></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
				</tr>
			</table>
		</form>
		<a href="home_barang.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>
	</div>

</body>

</html>