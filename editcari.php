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


                        <div id="right-panel" class="right-panel">

                            <!-- Header-->
                            <header id="header" class="header">

                                <div class="header-menu">

                                    <div class="col-sm-7">
                                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-plus"></i></a>
                                        <div class="header-left">
                                            <h3>Edit Data Cari Ruko</h3>

                                        </div>
                                    </div>
                                </div>
                            </header>
                            <p>
                            <div class="container text-center">


                            </div>

                            <?php

                        $kon=mysqli_connect("localhost","root","","sewaruko");
	                    $id = $_GET['id'];
	                    $q = mysqli_query($kon,"select * from ruko where NomorRuko='$id'");
	                    while($data = mysqli_fetch_array($q)){
		                    
                            ?>
		

        <div class="container-fluid">
                <div class="card">
                <div class="container mt-3">

        <form method="post" action="updatecari.php">
						
        <label for="">No Ruko :</label>
					<td>
						<input type="text" class="form-control" name="nomorruko" value="<?php echo $data['NomorRuko']; ?> " Disabled>
					</td>
				</tr>
				<tr>			
					<td>Harga Sewa</td>
					<td>
						<input type="text" class="form-control" name="nama" value="<?php echo $data['HargaSewa']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat Ruko</td>
					<td><input type="text" class="form-control" name="nim" value="<?php echo $data['AlamatRuko']; ?>"></td>
				</tr>
				<tr>
					<td>Status Ruko</td>
					<td><input type="text" class="form-control" name="alamat" value="<?php echo $data['StatusRuko']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" value="simpan"></td>
                    <a href="cariruko.php" class="btn btn-danger">Batal</a>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

                                                <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                                                <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                                                <script src="assets/js/sidebarmenu.js"></script>
                                                <script src="assets/js/app.min.js"></script>
                                                <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
                                                <script src="assets/libs/simplebar/dist/simplebar.js"></script>
                                                <script src="assets/js/dashboard.js"></script>


</body>

</html>