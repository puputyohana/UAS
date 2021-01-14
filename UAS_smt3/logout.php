<?php
	include "koneksi.php";
	session_start();

$_SESSION['iduser']='';
unset($_SESSION['iduser']);

session_unset();
session_destroy();

		header('location:index.php');
?>