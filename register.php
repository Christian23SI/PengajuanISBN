<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ISBN PCR</title>
  
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                   
                    <div class="card-body">
                        <div class="text-center mb-4">
                            
                            <h3>Registrasi</h3>

                        </div>
                        <form method="POST" action="controller/register.php">
                        
                 
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="level">Level Pengguna</label>
                                <select name="level" id="level" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="penulis">Penulis</option>
                                </select>
                            </div>
                          
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" name="daftar">Kirim</button>
                            </div>
                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Tambahkan Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
