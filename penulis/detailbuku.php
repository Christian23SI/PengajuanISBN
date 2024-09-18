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

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query untuk mengambil data berdasarkan ID
$sql = "SELECT * FROM berkas WHERE id = $id";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("Data tidak ditemukan.");
}

// Tutup koneksi
mysqli_close($db);
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h5>Detail Buku</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="uploads/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['judul']); ?>" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
                                <p>Penulis: <?php echo htmlspecialchars($row['penulis']); ?></p>
                                <p>Edisi: <?php echo htmlspecialchars($row['edisi']); ?></p>
                                <p>Seri: <?php echo htmlspecialchars($row['seri']); ?></p>
                                <p>Jumlah Halaman: <?php echo htmlspecialchars($row['jumlah_halaman']); ?></p>
                                <p>sinopsis: <?php echo htmlspecialchars(strip_tags($row['sinopsis'])); ?></p>
                                <p>Status: <?php echo htmlspecialchars($row['status']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


