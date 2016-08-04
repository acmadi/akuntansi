<?php
function menampilkanAdmin(){
    ?>
    <title>Halaman Admin</title>

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
                    <table id="datatable1" class="table .table-hover">
                        <thead>
                          <tr class="active">
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Admin</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            foreach (tampilAdmin() as $admin) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $admin['username'] ?></td>
                                <td><?= $admin['password'] ?></td>
                                <td><?= $admin['nama_admin'] ?></td>
                                <td>
                                    <a href="../../pengelola/admin/index.php?menu=admin&amp;action=edit&amp;id=<?=$admin['id_admin']?>">
                                            <button class="btn btn-xs btn-default"><i class="fa fa-edit fa-fw"></i>Lihat</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <?php
}
