<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT s.id_staff, s.nama_staff, s.alamat, s.umur, g.nama_ged FROM  t_staff s JOIN  t_gedung g ON s.id_ged = g.id_ged ");
?>

<html>

<head>
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
    <title>Data Staff</title>
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
        <h2>Data Staff</h2>
        <a href="add_staff.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
        <br></br>
        <table class="table table-bordered border-secondary" width='80%' border=>

            <tr class="table-dark">
                <th>Id Staff</th>
                <th>Nama Staff </th>
                <th>Alamat Staff</th>
                <th>Umur</th>
                <th>Nama Gedung</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id_staff'] . "</td>";
                echo "<td>" . $user_data['nama_staff'] . "</td>";
                echo "<td>" . $user_data['alamat'] . "</td>";
                echo "<td>" . $user_data['umur'] . "</td>";
                echo "<td>" . $user_data['nama_ged'] . "</td>";
                echo "<td>
                    <a href='edit_staff.php?id_staff=$user_data[id_staff]' class='btn btn-warning btn-sm' style='font-weight: 600;' >Edit</a> | 
                    <a href='delete_staff.php?id_staff=$user_data[id_staff]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a></td></tr>";
            }
            ?>
        </table>
        <a href="index.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali ke Home</a>
    </div>

</body>

</html>