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

// Query untuk mengambil data dari 2 tabel
$sql = "SELECT berkas.id,berkas.judul,berkas.tanggal_pengajuan, berkas.penulis, 
status.status AS status_nama
        FROM berkas
        JOIN status ON berkas.id_status = status.id";
$result = mysqli_query($db, $sql);
?>


<section class="section-body">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-4">
                    <div class="card-header">
                        <div class="card-header-form">
                            <h5>Admin</h5>
                            <h6>List Evaluasi ISBN</h6>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped table" style="width: 100%" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Cek apakah ada data
                                    if (mysqli_num_rows($result) > 0) {
                                        // Output data dari setiap baris
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>';
                                            echo "<td class='align-middle'>" . htmlspecialchars($row['tanggal_pengajuan']) . "</td>";
                                            echo "<td class='align-middle btn btn-info m-2'>" . htmlspecialchars($row['status_nama']) . "</td>";
                                            echo "<td class='align-middle'>" . htmlspecialchars($row['judul']) . "</td>";
                                            echo "<td class='align-middle'>" . htmlspecialchars($row['penulis']) . "</td>";
                            
                                            echo '    <td><a href=" sidebaradmin_editstatus.php?id=' . $row['id'] . '" class="btn btn-outline-info">Edit</a></td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="6" class="text-center">No data available</td></tr>';
                                    }
                                    // Tutup koneksi
                                    mysqli_close($db);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

