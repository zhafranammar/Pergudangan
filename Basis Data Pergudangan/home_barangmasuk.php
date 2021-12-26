<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT p.id_pemasokan_supplier, p.tanggal, p.id_bar, b.nama_bar, p.jumlah, p.id_sup, s.nama_sup FROM pemasokan_supplier p JOIN t_barang b ON p.id_bar = b.id_bar JOIN t_supplier s ON p.id_sup = s.id_sup ");
?>

<html>

<head>
    <title>Data Barang Masuk</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
        <h2>Data Barang Masuk</h2>
        <a class="btn btn-success"href="add_barangmasuk1.php">Tambah Data Supplier</a><br /><br />
        <a class="btn btn-success"href="add_barangmasuk2.php">Tambah Data Informasi Pemasokan oleh Supplier</a><br /><br />


        <table class="table table-bordered border-secondary" width='80%' border=1>

            <tr class="table-dark">
                <th>Tanggal</th>
                <th>Id Barang </th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Id Supplier</th>
                <th>Nama Supplier</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['tanggal'] . "</td>";
                echo "<td>" . $user_data['id_bar'] . "</td>";
                echo "<td>" . $user_data['nama_bar'] . "</td>";
                echo "<td>" . $user_data['jumlah'] . "</td>";
                echo "<td>" . $user_data['id_sup'] . "</td>";
                echo "<td>" . $user_data['nama_sup'] . "</td>";

                echo "<td>
                    <a class='btn btn-warning btn-sm' style='font-weight: 600;' href='edit_barangmasuk1.php?id_sup=$user_data[id_sup]'>Edit Data Supplier</a> <br></br>
                    <a class='btn btn-warning btn-sm' style='font-weight: 600;' href='edit_barangmasuk2.php?id_pemasokan_supplier=$user_data[id_pemasokan_supplier]'>Edit Data Pemasokan Supplier</a> <br></br> 
                    <a class='btn btn-danger btn-sm' style='font-weight: 600;' href='delete_barangmasuk1.php?id_sup=$user_data[id_sup]'>Delete</a> </a></tr>";
            }
            ?>
        </table>
        <a href="index.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali ke Home</a>
    </div>


</body>

</html>