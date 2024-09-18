<section>
<div class="container">
    <h2 class="mt-4 text-center text-primary">FORM PENGAJUAN ISBN</h2>
    <h4 class="mb-4 text-center text-dark">Masukanlah data Pengajuan Sesuai dengan yang sebenarnya!</h4>
    <form method="POST" action="controller/pengajuan.php" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
            <div class="col-3">
                    <div class="form-group">
                        <label for="penulis">Nama Penulis</label>
                        <input type="text" class="form-control" name="penulis" required>
                    </div>
                </div>
               
                <div class="col-3">
                    <div class="form-group">
                        <label for="edisi">Edisi</label>
                        <input type="text" class="form-control" name="edisi" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="seri">Seri</label>
                        <input type="text" class="form-control" name="seri" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <input type="text" class="form-control" name="jumlah_halaman" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
                        <input type="date" class="form-control" name="tanggal_pengajuan" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group" style="display: none;">
                        <label for="id_status">Status</label>
                        <input type="hidden" class="form-control" name="id_status" value="1" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group" style="display: none;">
                        <label for="no_isbn">noisbn</label>
                        <input type="hidden" class="form-control" name="no_isbn" value="1" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group" style="display: none;">
                        <label for="sinopsis">sinopsis</label>
                        <input type="hidden" class="form-control" name="sinopsis" value="proses pengajuan" required>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="gambar">Input File</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
</section>

