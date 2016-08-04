<?php
function modalTambahNamaAkun() {
    ?>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <form role="form" action="index.php?menu=nama_akun&amp;action=tambah" method="post" enctype="multipart/form-data"> -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="tambahLabel">Tambah Data Nama Akun</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_akun">Akun:</label>
                            <select name="id_akun" id="tid_akun" class="form-control selecttambah" required style="width: 100%;">
                                <?php
                                foreach (tampilAkun() as $akun ) { ?>
                                      <option value="<?php echo $akun['id_akun']; ?>"><?php echo $akun['akun']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_akun">Nama Akun:</label>
                            <input type="text" id="tnama_akun" name="nama_akun" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="no_akun">No Akun:</label>
                            <input type="number" id="tno_akun" name="no_akun" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <!-- <input type="submit" class="btn btn-primary" name="tambah" value="Tambah"> -->
                        <button type="submit" class="btn btn-primary" id="bt-tambah" data-dismiss="modal">Simpan</button>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
    <?php
}
function modalUbahNamaAkun() {
    ?>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <form role="form" action="index.php?menu=nama_akun&amp;action=ubah" method="post" enctype="multipart/form-data"> -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="tambahLabel">Ubah Data Nama Akun</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="uid_detail_akun" name="id_detail_akun" class="form-control">
                        <div class="form-group">
                            <label for="id_akun">Akun:</label>
                            <select id="uid_akun" name="id_akun" class="form-control selectedit" required style="width: 100%;">
                                <?php
                                foreach (tampilAkun() as $akun ) { ?>
                                      <option value="<?php echo $akun['id_akun']; ?>"><?php echo $akun['akun']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_akun">Nama Akun:</label>
                            <input type="text" id="unama_akun" name="nama_akun" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="no_akun">No Akun:</label>
                            <input type="number" id="uno_akun" name="no_akun" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="bt-ubah" data-dismiss="modal">Simpan</button>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
    <?php
}
function menampilkanNamaAkun(){
    modalTambahNamaAkun();
    modalUbahNamaAkun();
    ?>
    <title>Halaman Nama Akun</title>

    <div class="content-wrapper">
        <!-- Konten -->
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <legend>Selamat Datang</legend>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah">
                                <i class="fa fa-fw fa-plus-circle"></i>Tambah
                            </button>
                        </div>
                    </div><br>
                    <div class="data-content">
                    <?php
                        //memanggil modal

                        if(!empty($_SESSION['sukses'])) {
                            ?>
                            <div class="alert bg-success">
                                <?= $_SESSION['sukses']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php

                            unset($_SESSION['sukses']);
                        }

                        if(!empty($_SESSION['gagal'])) {
                            ?>
                            <div class="alert bg-danger">
                                <?= $_SESSION['gagal']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
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
                </div>
                </div>
            </div>
        </section>
    </div>
    <?php
}
