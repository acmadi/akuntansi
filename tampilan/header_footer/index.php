<?php
function Headers() {
	?>
	<!DOCTYPE html>
	<html>
	<head>
	 	<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<!-- Tell the browser to be responsive to screen width -->
	  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  	<!-- Bootstrap 3.3.6 -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/bootstrap/css/bootstrap.min.css">
	  	<!-- Font Awesome -->
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	  	<!-- Ionicons -->
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  	<!-- data tables -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/datatables/dataTables.bootstrap.css">
	  	<!-- daterange picker -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/daterangepicker/daterangepicker-bs3.css">
	  	<!-- bootstrap datepicker -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/datepicker/datepicker3.css">
	  	<!-- iCheck for checkboxes and radio inputs -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/iCheck/all.css">
	  	<!-- Bootstrap Color Picker -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/colorpicker/bootstrap-colorpicker.min.css">
	  	<!-- Bootstrap time Picker -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/timepicker/bootstrap-timepicker.min.css">
	  	<!-- Select2 -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/plugins/select2/select2.min.css">
	  	<!-- Theme style -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/dist/css/AdminLTE.min.css">
	  	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	  	<link rel="stylesheet" href="../../gaya/bootstrap/dist/css/skins/_all-skins.min.css">
	  	<!-- SweetAlert -->
	  	<link rel="stylesheet" type="text/css" href="../../gaya/bootstrap/dist/sweet/sweetalert.css">

	  	<script type="text/javascript" src="../../gaya/bootstrap/bootstrap/js/jquery1.min.js"></script>

	  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	  	<style type="text/css" media="screen">
	  		.modalDialog{
	  			position: fixed;
	  			font-family: Arial, Helvetica, sans-serif;
	  			top: 0;
	  			right: 0;
	  			bottom: 0;
	  			left: 0;
	  			background: rgba(0,0,0,0.8);
	  			z-index: 99999;
	  			opacity: 0;
	  			-webkit-transition: opacity 400ms ease-in;
	  			-moz-transition: opacity 400ms ease-in;
	  			transition: opacity 400ms ease-in;
	  			pointer-events: none;
	  		}

	  		.modalDialog:target{
	  			opacity: 1;
	  			pointer-events: auto;
	  		}

	  		.modalDialog > div{
	  			width: 400px;
	  			position: relative;
	  			margin: 10% auto;
	  			padding: 5px 20px 13px 20px;
	  			border-radius: 10px;
	  			background: #fff;
	  			background: -moz-linear-gradient(#fff, #999);
	  			background: -webkit-linear-gradient(#fff, #999);
	  			background: -o-linear-gradient(#fff, #999);
	  		}
	  	</style>
	</head>
	<body class="hold-transition skin-red-light sidebar-mini">
		<div class="wrapper">
		  	<header class="main-header">
		    	<!-- Logo -->
		    	<a href="#" class="logo">
		      		<!-- mini logo for sidebar mini 50x50 pixels -->
		      		<span class="logo-mini"><b>A</b>K</span>
		      		<!-- logo for regular state and mobile devices -->
		      		<span class="logo-lg"><b>Akuntansi</b></span>
		    	</a>
			    <!-- Header Navbar: style can be found in header.less -->
			    <nav class="navbar navbar-static-top">
			     	<!-- Sidebar toggle button-->
		      		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
		      		</a>

		      		<div class="navbar-custom-menu">
		        		<ul class="nav navbar-nav">
		          			<li class="dropdown user user-menu">
		            			<a href="#">
		              				<span class="hidden-xs"><i class="fa fa-sign-out">Keluar</i></span>
		            			</a>
					        </li>
		        		</ul>
		      		</div>
		    	</nav>
		  	</header>
		  	<aside class="main-sidebar">
		    	<section class="sidebar">
			      	<ul class="sidebar-menu">
			        	<li class="header">NAVIGASI UTAMA</li>
			        	<!-- MENU -->
			        	<li class="treeview">
					        <a href="#">
					            <i class="fa fa-user"></i>
					            <span>MENU 1</span>
					        </a>
					    </li>
			   	 	</ul>
		    	</section>
			</aside>
	<?php
}

function Footer() {
	?>
	</div>
	<!-- Wrapper -->

	<footer class="main-footer">
    	<div class="pull-right hidden-xs">
      		<b></b>
    	</div>
    	<strong>Copyright &copy; 2016-2017 <a href="#">Akuntansi</a>.</strong>
  	</footer>
		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
		<!-- jQuery 2.2.0 -->
		<script src="../../gaya/bootstrap/plugins/jQuery/jQuery-2.2.0.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="../../gaya/bootstrap/bootstrap/js/bootstrap.min.js"></script>
		<!-- DataTables -->
		<script src="../../gaya/bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="../../gaya/bootstrap/plugins/datatables/dataTables.bootstrap.min.js"></script>
		<!-- Select2 -->
		<script src="../../gaya/bootstrap/plugins/select2/select2.full.min.js"></script>
		<!-- InputMask -->
		<script src="../../gaya/bootstrap/plugins/input-mask/jquery.inputmask.js"></script>
		<script src="../../gaya/bootstrap/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		<script src="../../gaya/bootstrap/plugins/input-mask/jquery.inputmask.extensions.js"></script>
		<!-- date-range-picker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
		<script src="../../gaya/bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap datepicker -->
		<script src="../../gaya/bootstrap/plugins/datepicker/bootstrap-datepicker.js"></script>
		<!-- bootstrap color picker -->
		<script src="../../gaya/bootstrap/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<!-- bootstrap time picker -->
		<script src="../../gaya/bootstrap/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="../../gaya/bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- iCheck 1.0.1 -->
		<script src="../../gaya/bootstrap/plugins/iCheck/icheck.min.js"></script>

		<!-- AdminLTE App -->
		<script src="../../gaya/bootstrap/dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="../../gaya/bootstrap/dist/js/demo.js"></script>
		<!-- SweetAlert -->
		<script src="../../gaya/bootstrap/dist/sweet/sweetalert.min.js"></script>
		<!-- JQuery -->
		<script src="../../gaya/bootstrap/dist/js/jquery.min.js"></script>
		<!-- Page script -->
		<script>

		  	$(function () {
		    	//Initialize Select2 Elements
		    	$(".select2").select2();
		    	//Money Euro
		    	$("[data-mask]").inputmask();
		    	//Data Tables
		    	$("#example1").DataTable();
		    	$('#example2').DataTable({
		      		"paging": true,
		      		"lengthChange": false,
		      		"searching": false,
		      		"ordering": true,
		      		"info": true,
		      		"autoWidth": true
		    	});
		  	});

			function BerhasilMenyimpan(){
				swal({
					title: "",
					text: "Data telah disimpan.",
					timer: 1500,
					type: "success",
					showConfirmButton: false });
			}

			function GagalMenyimpan(){
				swal({
					title: "",
					text: "Data gagal disimpan.",
					timer: 1500,
					type: "error",
					showConfirmButton: false });
			}

			function BerhasilMemperbaharui(){
				swal({
					title: "",
					text: "Data telah diperbaharui.",
					timer: 1500,
					type: "success",
					showConfirmButton: false });
			}

			function GagalMemperbaharui(){
				swal({
					title: "",
					text: "Data gagal diperbaharui.",
					timer: 1500,
					type: "error",
					showConfirmButton: false });
			}

			function BerhasilMenghapus(){
				swal({
					title: "",
					text: "Data telah dihapus.",
					timer: 1500,
					type: "success",
					showConfirmButton: false });
			}

			function GagalMenghapus(){
				swal({
					title: "",
					text: "Data gagal dihapus.",
					timer: 1500,
					type: "error",
					showConfirmButton: false });
			}
		</script>
	</body>
	</html>
	<?php
}

function Tanggal($tanggal) {
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$tahun = substr($tanggal, 0, 4);
	$bulan = substr($tanggal, 5, 2);
	$tgl = substr($tanggal, 8, 2);

	$hasil = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
	return ($hasil);
}

function Rupiah($rupiah) {
	//format rupiah
	$jumlah_desimal = "2";
	$pemisah_desimal = ",";
	$pemisah_ribuan = ".";

	$hasil = number_format($rupiah, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	return ($hasil);
}
?>