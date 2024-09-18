<?php
// edit.php

// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tugas_kelompok3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Dapatkan ID dari query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$data = array('id' => '', 'id_status' => '', 'sinopsis' => ''); // Data default

if ($id > 0) {
    $sql = "SELECT * FROM berkas WHERE id=$id LIMIT 1";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo 'data ditemukan';
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
} else {
    echo "ID tidak valid!";
    exit();
}

mysqli_close($db);
?>
