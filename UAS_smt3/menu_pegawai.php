  <div id="wrapper">
<?php
    session_start();
  ?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
                <div class="nav-item">
                    <span class="nav-link"><center>You're Back!!</center></span>
                </div>

                <div class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                </div>


                <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">
                    
                        <br>
                             <?php
                              $user = $_SESSION['nama_lengkap'];
                              echo "$user";
                             ?>
                    </div>
                </div>

                <hr>
                <li class="nav-item active">
                <span>
                    
                </span>
                </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

             <li class="nav-item">
                <a class="nav-link collapsed" href="pegawai.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="gajisaya_pegawai.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Gaji Saya</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="profil_pegawai.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Profil</span>
                </a>
            </li>


        </ul>


            <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>