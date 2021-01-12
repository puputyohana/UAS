<?php
	//panggil koneksi db 
	include "koneksi.php";
	
	$pass = $_POST['password'];
	$username = mysqli_escape_string($koneksi, $_POST['username']);
	$password = mysqli_escape_string($koneksi, $pass);
	$level = mysqli_escape_string($koneksi, $_POST['level']);

	//cek username, terdaftar atau tidak
	$cek_user = mysqli_query($koneksi, "SELECT * FROm user WHERE username = '$username' and level = '$level' ");
	$user_valid = mysqli_fetch_array($cek_user);

	//uji jika username terdaftar
	if($user_valid){
		//cek pass sesuai atau tidak
		if($password ==  $user_valid['password']){
			//jika pass sesuai maka buat session
			session_start();
			$_SESSION['username'] = $user_valid['username'];
			$_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
			$_SESSION['level'] = $user_valid['level'];

			//uji level user
			if($level == "pegawai"){
				header('location:pegawai.php');
			}else if($level == "admin"){
				header('location:datatransaksi_admin.php');
			}

		}else{
		//jika tidak valid
		echo "<script>alert('Maaf, Login Gagal, password anda tidak sesuai!');document.location='index.php'</script>";
	}

	}else{
		//jika tidak valid
		echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
	}

?>