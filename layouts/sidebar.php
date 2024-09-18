<!DOCTYPE html>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            
                <div class="sidebar-brand-text mx-3">Admin </div>
            </a>

            <div class="foto-profil" style="text-align: center;">
                <img style="width: 150px;" src="asset/image/profil.png" alt="">
            </div>

          <hr>

            <!-- home -->
            <li class="nav-item">
                <a class="nav-link " href="{{route('produkbeli.index')}}" 
                   >
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
           
            </li>
         
            <!-- daftar buku -->

            <li class="nav-item active">
                <a class="nav-link" href="{{route('blog.index')}}">
                    <i class="fas fa-list"></i>
                    <span>Daftar Buku</span></a>
            </li>
            <!-- daftar buku -->
     

            <!-- history pengajuan -->

            <li class="nav-item active">
                <a class="nav-link" href="{{route('socialmedia.index')}}">
                    <i class="fas fa-history"></i>
                    <span>History Pengajuan</span></a>
            </li>
           

      
      <!-- Status Progres -->

      <li class="nav-item active">
                <a class="nav-link" href="{{route('Status Progres.index')}}"">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Status Progress</span></a>
            </li>
            <!-- Status Progress -->
            
      


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
                                         
                        <a class="btn btn-danger" style="position: absolute; top: 20px; right: 20px;" href="login.php">Keluar</a>
   
                    </div>

                       
          
                    </div>
                </div>
            </div>

            <main>
               