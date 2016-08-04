<?php
function tampilAkun() {
    global $db;

    $check_statement = $db->prepare('SELECT * FROM akun ORDER BY id_akun');
    $check_statement->execute();

    return $check_statement->fetchAll(PDO::FETCH_ASSOC);
}

function tampilNamaAkun() {
    global $db;

    $check_statement = $db->prepare('SELECT * FROM detail_akun,akun WHERE detail_akun.id_akun = akun.id_akun ORDER BY detail_akun.id_akun');
    $check_statement->execute();

    return $check_statement->fetchAll(PDO::FETCH_ASSOC);
}

function tambahNamaAkun($data) {
    global $db;

    $check_statement = $db->prepare('SELECT COUNT(*) AS data FROM detail_akun WHERE nama_akun = :nama_akun');
    $check_statement->bindValue(':nama_akun', $data['nama_akun'], PDO::PARAM_STR);
    $check_statement->execute();
    $result = $check_statement->fetch(PDO::FETCH_ASSOC);

    if($result['data'] == 1) {
        $_SESSION['gagal'] = "Nama akun sudah terdaftar";
        return false;
    } else {
        $insert_statement = $db->prepare('INSERT INTO detail_akun VALUES(null,:id_akun, :no_akun, :nama_akun)');
        $insert_statement->bindValue(':id_akun', $data['id_akun'], PDO::PARAM_INT);
        $insert_statement->bindValue(':no_akun', $data['no_akun'], PDO::PARAM_INT);
        $insert_statement->bindValue(':nama_akun', $data['nama_akun'], PDO::PARAM_STR);
        $insert_statement->execute();
        $_SESSION['sukses'] = "Nama Akun berhasil ditambah";
        return true;
    }
}
function ubahNamaAkun($data) {
    global $db;

    $statement = $db->prepare('UPDATE detail_akun SET nama_akun = :nama_akun, id_akun = :id_akun, no_akun = :no_akun WHERE id_detail_akun = :id_detail_akun');
    $statement->bindValue(':nama_akun', $data['nama_akun'], PDO::PARAM_STR);
    $statement->bindValue(':no_akun', $data['no_akun'], PDO::PARAM_INT);
    $statement->bindValue(':id_akun', $data['id_akun'], PDO::PARAM_INT);
    $statement->bindValue(':id_detail_akun', $data['id_detail_akun'], PDO::PARAM_INT);
    $statement->execute();
    $_SESSION['sukses'] = "Nama Akun berhasil diubah";
    return true;
}
function hapusNamaAkun($id) {
    global $db;

    $statement = $db->prepare('DELETE FROM detail_akun WHERE id_detail_akun = :id');
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $_SESSION['sukses'] = "Nama Akun berhasil dihapus";
}
