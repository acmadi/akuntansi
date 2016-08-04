<?php

function login($username, $password) {
    global $db;

    $statement = $db->prepare('SELECT COUNT(*) AS result FROM admin WHERE username = :username AND password = :password');
    $statement->bindValue(':username', $username, PDO::PARAM_STR);
    $statement->bindValue(':password', $password, PDO::PARAM_STR);
    $statement->execute();

    $login = $statement->fetch(PDO::FETCH_ASSOC);

    if($login['result'] == 1) {

        $_SESSION['login_status'] = true;
        $_SESSION['user_name'] = $username;

        return true;

    } else
        return false;

}

function tampilAdmin() {
    global $db;

    $check_statement = $db->prepare('SELECT * FROM admin');
    $check_statement->execute();

    return $check_statement->fetchAll(PDO::FETCH_ASSOC);
}

function tambahAdmin($data) {
    global $db;

    $check_statement = $db->prepare('SELECT COUNT(*) AS data FROM admin WHERE username = :username');
    $check_statement->bindValue(':username', $data['username'], PDO::PARAM_STR);
    $check_statement->execute();
    $result = $check_statement->fetch(PDO::FETCH_ASSOC);

    if($result['data'] == 1) {
        $_SESSION['gagal'] = "Username sudah terdaftar";
        return false;
    } else {
        $insert_statement = $db->prepare('INSERT INTO admin VALUES(:username, :password, :nama_admin)');
        $insert_statement->bindValue(':username', $data['username'], PDO::PARAM_STR);
        $insert_statement->bindValue(':password', $data['password'], PDO::PARAM_STR);
        $insert_statement->bindValue(':nama_admin', $data['nama_admin'], PDO::PARAM_STR);
        $insert_statement->execute();
        $_SESSION['sukses'] = "Data admin berhasil ditambah";
        return true;
    }
}

?>
