<?php
function Headers() {
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../../gaya/bootstrap/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/bootstrap/css/bootstrap-dialog.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/plugins/timepicker/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../gaya/bootstrap/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" type="text/css" href="../../gaya/bootstrap/dist/sweet/sweetalert.css">
        <!-- daterange picker -->
        <!-- <link rel="stylesheet" href="../../gaya/bootstrap/plugins/daterangepicker/daterangepicker-bs3.css"> -->
        <!-- iCheck for checkboxes and radio inputs -->
        <!-- <link rel="stylesheet" href="../../gaya/bootstrap/plugins/iCheck/all.css"> -->
        <!-- Bootstrap Color Picker -->
        <!-- <link rel="stylesheet" href="../../gaya/bootstrap/plugins/colorpicker/bootstrap-colorpicker.min.css"> -->
        <!-- bootstrap datepicker
        style type="text/css" media="screen">
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
        </style>-->
    </head>
<?php
}

function sidebar($menu) {
?>
    <body class="hold-transition skin-red-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><b>B</b>L</span>
                    <span class="logo-lg"><b>Balance</b></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="index.php?menu=logout">
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
                        <li <?= ($menu == 'admin') ? ' class="active treeview"' : '' ?>>
                            <a href="index.php?menu=admin"><i class="fa fa-user"></i><span>Admin</span></a>
                        </li>
                        <li <?= ($menu == 'nama_akun') ? ' class="active treeview"' : '' ?>>
                            <a href="index.php?menu=nama_akun"><i class="fa fa-user"></i><span>Nama Akun</span></a>
                        </li>
                        <li <?= ($menu == 'laporan_keuangan') ? ' class="active treeview"' : '' ?>>
                            <a href="index.php?menu=laporan_keuangan"><i class="fa fa-user"></i><span>Laporan Keuangan</span></a>
                        </li>
                    </ul>
                </section>
            </aside>

<?php
}

function Footer() {
?>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b></b>
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Balance</a>.</strong>
    </footer>
    <div class="control-sidebar-bg"></div>
        <!--
        <script src="../../gaya/bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="../../gaya/bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/iCheck/icheck.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/jQuery/jquery.validate.min.js"></script>
        <script src="../../gaya/bootstrap/dist/js/jquery.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="../../gaya/bootstrap/dist/js/demo.js"></script>
        -->
        <script src="../../gaya/bootstrap/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../../gaya/bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../gaya/bootstrap/bootstrap/js/bootstrap-dialog.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/select2/select2.full.min.js"></script>
        <script src="../../gaya/bootstrap/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="../../gaya/bootstrap/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="../../gaya/bootstrap/dist/js/app.min.js"></script>
        <script src="../../gaya/bootstrap/dist/sweet/sweetalert.min.js"></script>
        <script src="../../gaya/bootstrap/main.js"></script>
    </body>
    </html>
    <?php
}
?>
