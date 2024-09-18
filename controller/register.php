<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tugas_kelompok3";

// Membuat koneksi ke database
$koneksi = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi
if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan membersihkan input
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $level = mysqli_real_escape_string($koneksi, $_POST['level']);

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menggunakan prepared statement untuk menyimpan data
    $stmt = $koneksi->prepare("INSERT INTO user (email, password, nama, level) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $hashed_password, $nama, $level);

    // Menjalankan query dan memeriksa hasil
    if ($stmt->execute()) {
        header("location: http://localhost/PROJEK/Projek_Kel3/sidebarpenulis.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $koneksi->close();
} else {
    echo "Invalid request method.";
}
?>
