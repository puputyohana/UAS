<div id="wrapper">
 	<div class="container-fluid">
 				<h1 class="h3 mb-2 text-gray-800"><br>Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the</p>
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
                                            <th>ID User</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>

<?php
	$query_product = mysqli_query( $config, "SELECT iduser, nama, alamat, email, status FROM tbluser order by iduser");
	$jum_data = mysqli_num_rows($query_product);
	?>

	<?php if($jum_data == 0 ){ ?>
			<p>Tidak ada produk yang ditemukan.</p>
	<?php }
	while($data = mysqli_fetch_array($query_product)){
	?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data['iduser']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td>Aksi</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
     <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>