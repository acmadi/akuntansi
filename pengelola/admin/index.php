<?php
session_start();
ob_start();
//Koneksi Database
require_once('../../fungsi/app.config.php');

//Menentukan menu apa yg sedang di pilih lewat url
$menu = (isset($_GET['menu'])) ? $_GET['menu'] : '';

//memanggil halaman
include_once '../../tampilan/admin/header_footer/index.php';
include_once '../../fungsi/admin/admin.php';
include_once '../../fungsi/admin/nama_akun.php';
include_once '../../tampilan/admin/admin.php';
include_once '../../tampilan/admin/nama_akun.php';
//Validasi Login
if (!isset($_SESSION['user_name'])) {
	if (isset($_POST['login'])) {
		//bisa pake if lagi
		login(addslashes($_POST['username']), md5($_POST['password']));
		header("Location: index.php");
	} else {
		header("Location: ../../tampilan/admin/login.php");
	}
}

Headers();
sidebar($menu);
switch ($menu) {
	case 'admin':
		menampilkanAdmin();
		break;
	case 'nama_akun':
		menampilkanNamaAkun();
		break;
	case 'logout':
		session_destroy();
		header("Location: index.php");
		break;
	default:
		menampilkanAdmin();
		break;
}
Footer();
?>
