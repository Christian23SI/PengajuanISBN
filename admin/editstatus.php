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
$data = array('id' => '', 'status' => '', 'keterangan' => ''); // Data default

if ($id > 0) {
    $sql = "SELECT * FROM berkas WHERE id=$id LIMIT 1";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
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


<section>
    <div class="container">
        <h2 class="mt-4">Edit Status</h2>
        <form method="POST" action="controller/updatestatus.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">

            <div class="form-group">
                <label for="id_status">Status</label>
                <select class="form-control" id="id_status" name="id_status" required>
                    <option value="1" <?php if ($data['id_status'] == '1') echo 'selected'; ?>>Pengajuan</option>
                    <option value="2" <?php if ($data['id_status'] == '2') echo 'selected'; ?>>Proses</option>
                    <option value="3" <?php if ($data['id_status'] == '3') echo 'selected'; ?>>Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_isbn">NO ISBN</label>
                <input type="text" value="<?php echo htmlspecialchars($data['no_isbn']); ?>  " class="form-control" id="no_isbn" name="no_isbn" rows="5" required>         
            </div>
            <div class="form-group">
                <label for="content">Sinopsis</label>
                <textarea class="form-control" id="content" name="sinopsis" rows="5" required><?php echo htmlspecialchars($data['sinopsis']); ?></textarea>
                <script>
                    CKEDITOR.replace('content');
                </script>
            </div>

            <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
    </div>
</section>
