<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIM. Sewa Ruko</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="#" class="display-6">
                    <span class="hide-menu">SIM. SewaRuko</span>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="cariruko.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Cari Ruko</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="nyewaruko.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Sewa Ruko</span>
                            </a>
                        </li>



                    </ul>
                </nav>

                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="#" target="" class="btn btn-primary">Admin</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="mes sage-body">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Form Tabel Cari Ruko</h5>
                        <div class="container mt-3">

                            <form action="" method="post">
                                <div class="mb-3 mt-3">
                                    <label for="noruko">No Ruko :</label>
                                    <input type="text" class="form-control" id="noruko" placeholder="Masukkan No ruko" name="noruko">
                                </div>
                                <div class="mb-3">
                                    <label for="hargasewa">Harga Sewa :</label>
                                    <input type="text" class="form-control" id="hargasewa" placeholder="Masukkan harga penyewa" name="hargasewa">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat">Alamat :</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="status">Status Ruko :</label>
                                    <input type="text" class="form-control" id="status" placeholder="Masukkan status ruko" name="status">
                                </div>

                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                                <a href="cariruko.php" target="" class="btn btn-danger">Kembali</a>
                            </form>


                            <?php if (isset($_POST['simpan'])) {

                                $kon = mysqli_connect("localhost", "root", "", "sewaruko");

                                $NomorRuko     = $_POST['noruko'];
                                $HargaSewa     = $_POST['hargasewa'];
                                $AlamatRuko    = $_POST['alamat'];
                                $StatusRuko    = $_POST['status'];

                                $sql = "insert into ruko (NomorRuko,hargasewa,AlamatRuko,StatusRuko) values ('" . $NomorRuko . "','" . $HargaSewa . "','" . $AlamatRuko . "','" . $StatusRuko . "')";
                                $q = mysqli_query($kon, $sql);

                                if ($sql) {
                                    echo "<script>alert('data berhasil disimpan');
                                document.location.href='cariruko.php'</script>\n";
                                } else {
                                    echo "<script>alert('data gagal disimpan');
                                document.location.href='cariruko.php'</script>\n";
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>



<!-- stylesheet -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/sidebarmenu.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.js"></script>
<script src="assets/js/dashboard.js"></script>
</body>

</html>