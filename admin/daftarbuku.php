<?php
// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tugas_kelompok3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Query untuk mengambil data
$sql = "SELECT * FROM berkas";
$result = mysqli_query($db, $sql);
?>



<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="text-center mt-4 text-dark">
                <h2 class="section-heading text-uppercase">Daftar Buku</h2>
            </div>
        </div>
        <div class="card m-4">
            <div class="container">
                <div class="row">
                    <?php
                    // Cek apakah ada data
                    if (mysqli_num_rows($result) > 0) {
                        // Output data dari setiap baris
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-lg-3 col-md-6 mt-4 mb-4">';
                            echo '    <div class="card" style="max-height: 100%;">';
                            echo '        <div class="card-title m-3">';
                            echo '            <img class="card-img-top" style="height: 300px; object-fit: cover;" src="uploads/' . htmlspecialchars($row['gambar']) . '" alt="">';
                            echo '        </div>';
                            echo '        <div class="card-body">';
                            echo '            <h3 class="card-text">' . htmlspecialchars($row['judul']) . '</h3>';
                            echo '            <p class="card-text">by ' . htmlspecialchars($row['penulis']) . '</p>';
                            echo '            <a href="sidebaradmin_detailbuku.php?id=' . $row['id'] . '" class="btn btn-outline-primary">Detail</a>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="col-12 text-center">No data available</div>';
                    }
                    // Tutup koneksi
                    mysqli_close($db);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

                    