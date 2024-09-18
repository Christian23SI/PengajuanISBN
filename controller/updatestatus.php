<?php
// updatestatus.php

// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tugas_kelompok3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Cek apakah request method adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $id_status = isset($_POST['id_status']) ? $_POST['id_status'] : '';
    $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : '';
    $no_isbn = isset($_POST['no_isbn']) ? $_POST['no_isbn'] : '';

//  var_dump($id_status);
//  var_dump($sinopsis);
    // Validasi data
    if (empty($id_status) || empty($sinopsis) ||empty($no_isbn) || $id <= 0) {
        echo "Semua field harus diisi!";
        exit();
    }

    // Escaping data untuk mencegah SQL Injection
    $id_status = mysqli_real_escape_string($db, $id_status);
    $sinopsis = mysqli_real_escape_string($db, $sinopsis);
    $sinopsis = mysqli_real_escape_string($db, $no_isbn);

    // Update data di database
    $sql = "UPDATE berkas SET id_status='$id_status',
     sinopsis='$sinopsis', no_isbn='$no_isbn' WHERE id=$id";

    if (mysqli_query($db, $sql)) {
        // Redirect setelah update berhasil
        header("Location: http://localhost/PROJEK/Projek_Kel3/sidebaradmin_statuspengajuan.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

// Tutup koneksi ke database
mysqli_close($db);
?>
