<html>

<head>
    <title>Home</title>
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
    <!--Container-->
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="appicon-container">
                    <div class="appicon row rounded align-items-center">
                        <div class="appicon-icon col-5">
                            <a href="home_gedung.php"><img src="https://img.icons8.com/fluency/48/000000/garage-closed.png" alt="gedung"></a>
                        </div>
                        <div class="appicon-text col-7">
                            <h4><a>Data Gedung</a></h4>
                            <span>
                                <p>Berisi Kumpulan data dari gedung yang digunakan oleh perusahaan ABC</p>
                            </span>
                            <a href="home_gedung.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="appicon-container">
                    <div class="appicon row rounded align-items-center">
                        <div class="appicon-icon col-5">
                            <a href="home_staff.php"><img src="https://img.icons8.com/external-becris-lineal-color-becris/64/000000/external-staff-hotel-service-becris-lineal-color-becris.png"" alt="Staff"></a>
                        </div>
                        <div class="appicon-text col-7">
                            <h4><a ">Data Staff</a></h4>
                            <span>
                                <p>Berisi Kumpulan data dari staff dari perusahaan ABC</p>
                            </span>
                            <a href="home_staff.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="appicon-container">
                    <div class="appicon row rounded align-items-center">
                        <div class="appicon-icon col-5">
                            <a href="home_barang.php"><img src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/64/000000/external-box-product-packaging-tulpahn-outline-color-tulpahn.png" alt="Barang"></a>
                        </div>
                        <div class="appicon-text col-7">
                            <h4><a >Data Barang</a></h4>
                            <span>
                                <p>Berisi Kumpulan data dari barang yang ada pada gudang perusahaan ABC</p>
                            </span>
                            <a href="home_barang.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="appicon-container">
                    <div class="appicon row rounded align-items-center">
                        <div class="appicon-icon col-5">
                            <a href="home_barangmasuk.php"><img src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/64/000000/external-box-product-packaging-tulpahn-outline-color-tulpahn.png" alt="Barang Masuk"></a>
                        </div>
                        <div class="appicon-text col-7">
                            <h4><a>Data Barang Masuk</a></h4>
                            <span>
                                <p>Berisi Kumpulan data dari barang yang masuk gudang perusahaan ABC</p>
                            </span>
                            <a href="home_barangmasuk.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="appicon-container">
                    <div class="appicon row rounded align-items-center">
                        <div class="appicon-icon col-5">
                            <a href="home_barangkeluar.php"><img src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/64/000000/external-box-product-packaging-tulpahn-outline-color-tulpahn.png" alt="Barang Keluar"></a>
                        </div>
                        <div class="appicon-text col-7">
                            <h4><a >Data Barang Keluar</a></h4>
                            <span>
                                <p>Berisi Kumpulan data dari barang yang keluar dari gudang perusahaan ABC</p>
                            </span>
                            <a href="home_barangkeluar.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Close Container-->
    
</body>

</html>