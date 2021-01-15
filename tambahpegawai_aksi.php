<?php
		
		include 'koneksi.php';

		$iduser = $_POST['iduser'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$divisi = $_POST['divisi'];
		$jml_kehadiran = $_POST['jml_kehadiran'];
		$no_rek = $_POST['no_rek'];
		$level = $_POST['level'];

		if($level == "Pegawai"){
		 
		mysqli_query($koneksi, "insert into user values('','$username','$password','$nama_lengkap','$divisi','$jml_kehadiran','$no_rek','$level')");
		header("location:datapegawai_admin.php");
		}
		
	?>