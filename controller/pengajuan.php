<?php
session_start();

// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tugas_kelompok3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debugging: Cek data yang diterima
    var_dump($_POST);
    
    // Ambil data dari form
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $penulis = mysqli_real_escape_string($db, $_POST['penulis']);
    $edisi = mysqli_real_escape_string($db, $_POST['edisi']);
    $seri = mysqli_real_escape_string($db, $_POST['seri']);
    $jumlah_halaman = mysqli_real_escape_string($db, $_POST['jumlah_halaman']);
    $tanggal_pengajuan = mysqli_real_escape_string($db, $_POST['tanggal_pengajuan']);
    $id_status = mysqli_real_escape_string($db, $_POST['id_status']);
    $sinopsis = mysqli_real_escape_string($db, $_POST['sinopsis']);
    $no_isbn = mysqli_real_escape_string($db, $_POST['no_isbn']);
    
    var_dump($penulis); // Debugging: Cek nilai penulis
    
    // Proses upload file
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File is valid, and was successfully uploaded.<br>";
            $file_name = basename($_FILES["gambar"]["name"]);

            // Insert data, Simpan data ke database
            $sql = "INSERT INTO berkas (judul, penulis, edisi, seri, jumlah_halaman, 
            id_status, sinopsis, no_isbn,tanggal_pengajuan, gambar) 
                    VALUES ('$judul', '$penulis', '$edisi', '$seri', '$jumlah_halaman',
                     '$id_status', '$sinopsis', '$no_isbn','$tanggal_pengajuan', '$file_name')";

            if (mysqli_query($db, $sql)) {
                header("Location: http://localhost/PROJEK/Projek_Kel3/sidebarpenulis_status.php");
                exit;
            } else {
                echo "Error: " . mysqli_error($db);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Menutup koneksi
mysqli_close($db);
?>
