<html>

<head>
	<title>Tambah Data Barang Keluar</title>
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

	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<!-- Data Tables -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

	<div class="container">
		<h3>Silahkan Masukkan Data</h3>
		<form action="add_barangkeluar2.php" method="post" name="form1">
			<table width="50%" border="0">
				<tr>
					<td>Id Penyaluran Distributor</td>
					<td><input type="text" name="id_penyaluran_distr"></td>
				</tr>
				<tr>
					<td>Id Barang</td>
					<td><input type="text" name="id_bar"></td>
				</tr>
				<tr>
					<td>Id Distributor</td>
					<td><input type="text" name="id_distr"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td><input type="date" name="tanggal"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah"></td>
				</tr>

				<td></td>
				<td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
				</tr>
			</table>
		</form>

		<?php

		// Check If form submitted, insert form data into users table.
		if (isset($_POST['Submit'])) {
			$id_penyaluran_distr = $_POST['id_penyaluran_distr'];
			$id_bar = $_POST['id_bar'];
			$id_distr = $_POST['id_distr'];
			$tanggal = $_POST['tanggal'];
			$jumlah = $_POST['jumlah'];

			// include database connection file
			include_once("config.php");

			// Insert user data into table
			$result = mysqli_query($mysqli, "INSERT INTO penyaluran_distributor(id_penyaluran_distr, id_bar, id_distr, tanggal, jumlah) VALUES('$id_penyaluran_distr', '$id_bar', '$id_distr', '$tanggal','$jumlah')");

			// Show message when user added
			echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='home_barangkeluar.php'>Lihat Data</a>";
		}
		?>
		<br>
		<a href="home_barangkeluar.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>
	</div>



</body>

</html>