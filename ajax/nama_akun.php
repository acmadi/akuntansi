<?php
session_start();
include_once '../tampilan/admin/header_footer/index.php';
require_once('../fungsi/app.config.php');
include_once '../fungsi/admin/nama_akun.php';

$data['id_akun'] = (isset($_GET['id_akun'])) ? $_GET['id_akun'] : '';
$data['nama_akun'] =(isset($_GET['nama_akun'])) ? $_GET['nama_akun'] : '';
$data['no_akun'] = (isset($_GET['no_akun'])) ? $_GET['no_akun'] : '';

if ($_GET['aksi'] == 'tambah') {
    tambahNamaAkun($data);
} else if ($_GET['aksi'] == 'ubah') {
    $data['id_detail_akun'] = $_GET['id_detail_akun'];
    ubahNamaAkun($data);
} else if ($_GET['aksi'] == 'hapus') {
    hapusNamaAkun($_GET['id']);
}

if(!empty($_SESSION['sukses'])) {
    $pesan = $_SESSION['sukses']; ?>
    <script>
        $(function () {
            var pesan = '<?php echo $pesan ?>';
            BerhasilMenyimpan(pesan);
        });
    </script>
<?php
    unset($_SESSION['sukses']);
}

if(!empty($_SESSION['gagal'])) {
    $pesan = $_SESSION['gagal']; ?>
    <script>
        $(function () {
            var pesan = '<?php echo $pesan ?>';
            GagalMenyimpan(pesan);
        });
    </script>
<?php
    unset($_SESSION['gagal']);
}
?>

<table id="datatable1" class="table .table-hover">
    <thead>
      <tr class="active">
        <th>No</th>
        <th>Akun</th>
        <th>Nama Akun</th>
        <th>No Akun</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $i = 1;
        foreach (tampilNamaAkun() as $nama_akun) {
    ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $nama_akun['akun'] ?></td>
            <td><?= $nama_akun['nama_akun'] ?></td>
            <td><?= $nama_akun['no_akun'] ?></td>
            <td>
                <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#edit" onclick="return edit_nama_akun('<?php echo $nama_akun['id_detail_akun']; ?>','<?php echo $nama_akun['id_akun']; ?>','<?php echo $nama_akun['no_akun']; ?>','<?php echo $nama_akun['nama_akun']; ?>')">
                    <i class="fa fa-edit fa-fw"></i>Ubah
                </button>
                <button class="btn btn-danger btn-xs" onclick="hapus_nama_akun(<?= $nama_akun['id_detail_akun'] . ',\'' . $nama_akun['nama_akun'] ?>')"><i class="fa fa-trash fa-fw"></i> Hapus</a>
                </button>
            </td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

<script src="../gaya/bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../gaya/bootstrap/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../gaya/bootstrap/main.js"></script>
<script>
$(function () {
    $("#datatable1").DataTable();
});
</script>
<script src="../gaya/bootstrap/dist/sweet/sweetalert.min.js"></script>
