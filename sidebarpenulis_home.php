<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISBN PCR</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    
    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- Tambahkan Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">` -->
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            
                <div class="sidebar-brand-text mx-3">Penulis </div>
            </a>

            
            <!-- home -->
            <li class="nav-item">
                <a class="nav-link " href="sidebarpenulis_home.php" 
                   >
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
           
            </li>

               <!-- daftar buku -->

               <li class="nav-item active">
                <a class="nav-link" href="sidebarpenulis_pengajuan.php">
                    <i class="fas fa-file"></i>
                    <span>Pengajuan ISBN</span></a>
            </li>
            <!-- daftar buku -->
         
            <!-- daftar buku -->

            <li class="nav-item active">
                <a class="nav-link" href="sidebarpenulis_daftarbuku.php">
                    <i class="fas fa-list"></i>
                    <span>Daftar Buku</span></a>
            </li>
            <!-- daftar buku -->
     

            <!-- history pengajuan -->

            <li class="nav-item active">
                <a class="nav-link" href="sidebarpenulis_status.php">
                    <i class="fas fa-history"></i>
                    <span>Status Pengajuan</span></a>
            </li>
           

      
      <!-- Status Progres -->

            
      


        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="header bg-white">
                <div class="container">
                    <div class="row">
                  
                        <div class="mt-2">
                        <img style="width: 400px;" src="asset/image/logopcr.png" alt="Politeknik Caltex Riau">
                                         
                        <a class="btn btn-danger" style="position: absolute; top: 20px; right: 20px;" href="controller/logout.php">Keluar</a>

                    </div>

                       
          
                    </div>
                </div>
            </div>

            <main>
                <?php 
                include 'penulis/home.php'; 
                ?>
            </main>
            
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 

</body>

<footer>

    <!-- Tambahkan Bootstrap JS -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript inti plugin -->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Skrip kustom untuk semua halaman -->
    <script src="asset/js/sb-admin-2.min.js"></script>

    <!-- Plugin level halaman -->
    <script src="asset/vendor/chart.js/Chart.min.js"></script>

    <!-- Skrip kustom level halaman -->
    <script src="asset/js/demo/chart-area-demo.js"></script>
    <script src="asset/js/demo/chart-pie-demo.js"></script>

</footer>
</html>
