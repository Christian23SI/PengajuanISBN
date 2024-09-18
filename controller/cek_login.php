<?php
session_start();

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
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Mencari pengguna dengan email yang diberikan
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Memeriksa password
        if (password_verify($password, $user['password'])) {
            // Password benar, set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['nama'];
            $_SESSION['user_level'] = $user['level'];

            // Redirect berdasarkan level pengguna
            if ($user['level'] == 'admin') {
                header("location: http://localhost/PROJEK/Projek_Kel3/sidebaradmin_home.php");
            } else if ($user['level'] == 'penulis') {
                header("location: http://localhost/PROJEK/Projek_Kel3/sidebarpenulis_home.php");
            }
            exit;
        } else {
            header("location: http://localhost/PROJEK/Projek_Kel3/sidebaradmin_home.php");
        }
    } else {
        header("location: http://localhost/PROJEK/Projek_Kel3/sidebarpenulis_home.php");
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $koneksi->close();
} else {
    header("location: http://localhost/PROJE/Projek_Kel3/sidebaradmin_home.php");
}
?>
