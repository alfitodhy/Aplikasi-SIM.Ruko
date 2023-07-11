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
                        <img src="" width="180" alt="" />
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
                        <h5 class="card-title fw-semibold mb-4">Carilah Ruko sesuai selera anda!</h5>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content">
                            <a href="tabelcari.php" target="" class="btn btn-secondary">Tambah Data Ruko</a>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">


                            <TR>
                                <thead>
                                    <table class="table table-bordered table">
                                        <thead class="thead-dark">
                                        </thead>
                                        <tbody>
                                            <p>
                                                <tr class="table-active" align="center">

                                                <tr class="table-dark">
                                                    <th>No</th>
                                                    <th>No Ruko </th>
                                                    <th>Harga Sewa </th>
                                                    <th>Alamat Ruko</th>
                                                    <th>Status Ruko</th>

                                                    <th>Aksi</th>
                                                </tr>
                                </thead>


                                <?php
                                //panggil koneksi kedatabase
                                $kon = mysqli_connect("localhost", "root", "", "sewaruko");
                                $sql = "select * from ruko";
                                $q = mysqli_query($kon, $sql);
                                $data = mysqli_fetch_array($q);
                                $no = 1;
                                do {

                                    //menampilkan hasil row diatas
                                    echo '<tr>';
                                    echo '<td>' . $no . '</td>';
                                    echo '<td>' . $data['NomorRuko'] . '</td>';
                                    echo '<td>' . $data['HargaSewa'] . '</td>';
                                    echo '<td>' . $data['AlamatRuko'] . '</td>';
                                    echo '<td>' . $data['StatusRuko'] . '</td>';


                                    echo '<td><a href="editcari.php?id=' . $data['NomorRuko'] . '" class="btn btn-warning btn-md">Edit</a> &nbsp; <a href="hapuscari.php?id=' . $data['NomorRuko'] . '" onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')" class="btn btn-danger btn-md">Hapus</a></td>';
                                    //menampilkan link edit dan hapus

                                    echo '</tr>';

                                    $no++; //menambah jumlah nomor urut

                                } while ($data = mysqli_fetch_array($q));
                                ?>




                                </table>
                        </div>
                    </div>
                </div>




                </td>
                </tr>

                </script>
                </td>
                </tr>
                </table>

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