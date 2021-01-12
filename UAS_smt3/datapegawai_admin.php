<!DOCTYPE html>
<html lang="en">

<?php
    include "koneksi.php";
?>

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

                    <p>
                        <a href="tambah_datapegawai.php"><i class="fa fa-plus fa-fw"></i> Tambah Data Pegawai</a>
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID</th>
                                            <th>USERNAME</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>DIVISI</th>
                                            <th>NO.REK </th>
                                            <th>HADIR</th>
                                            <th colspan="2">AKSI</th>
                                        </tr>
                                    </thead>

    <?php
    
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM user where level = 'pegawai'");
    while($d = mysqli_fetch_array($data)){
    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $d['iduser']; ?></td>
                                            <td><?php echo $d['username']; ?></td>
                                            <td><?php echo $d['nama_lengkap']; ?></td>
                                            <td><?php echo $d['divisi']; ?></td>
                                            <td><?php echo $d['no_rek']; ?></td>
                                            <td><?php echo $d['jml_kehadiran']; ?> Hari</td>
                                            <td>
                                            <center><a href="edit_datapegawai.php?iduser=<?php echo $d['iduser']; ?>"><i class="fa fa-edit fa-fw"></i></a></center>
                                            </td>
                                            <td>
                                            <center><a href="hapus_datapegawai.php?iduser=<?php echo $d['iduser']; ?>"><i class="fa fa-trash fa-fw"></i></a></a></center>
                                            </td>
                                        </tr>
    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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