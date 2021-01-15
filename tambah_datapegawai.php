<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
    <?php
        include "menu_admin.php";
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">


                      <!-- Begin Page Content -->
                <div class="container-fluid">
                <br>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
                    <p class="mb-4">Aplikasi Penggajian Berbasis Web merupakan Aplikasi web yang didesain untuk membantu pengelolaan gaji karyawan di suatu lembaga atau perusahaan. Karena berbasis web, sehingga untuk membuka aplikasi ini dilakukan melalui web browser. Aplikasi Penggajian ini juga dapat digunakan dalam komputer berbasis jaringan.</p>

                        <form class="user" method="post" action="tambahpegawai_aksi.php">
                                <div class="form-group row">
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        ID USER :
                                        <input type="hidden" class="form-control form-control-user" name ="iduser" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Username :
                                        <input type="text" class="form-control form-control-user" name ="username" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Password
                                        <input type="text" class="form-control form-control-user" name ="password" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Nama Lengkap :
                                        <input type="text" class="form-control form-control-user" name ="nama_lengkap" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Divisi :
                                        <input type="text" class="form-control form-control-user" name ="divisi" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Kehadiran :
                                        <input type="text" class="form-control form-control-user" name ="jml_kehadiran" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        No Rek :
                                        <input type="text" class="form-control form-control-user" name ="no_rek" placeholder="Nama Lengkap Anda..">
                                    </div>
                                    
                                </div>

                                 <div class="form-group row">
                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                     Level :
                                    <select class= "form-control-user" name="level">
                                            <option value="pegawai">Pegawai</option>
                                            <option value="admin">Admin</option>
                                     </select>
                                     </div>
                                    
                                </div>
 
                               <input class="btn btn-lg btn-primary btn-block" type="submit" value="simpan">
                            </form>


    </div>
                <!-- /.container-fluid -->

                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
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

</body>

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