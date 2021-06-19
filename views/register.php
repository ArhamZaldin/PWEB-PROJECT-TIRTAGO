<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../aset/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <title>Masuk | TIRTAGO</title>

    </head>
    
    <body>
    
    <!-- Preloader Start -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- Preloader End -->
    
    <!-- Header Area Start -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo Start -->
                        <a href="/?act=index" class="logo">Tirta<em>Go</em></a>
                        <!-- Logo End -->
                        <!-- Menu Start -->
                        <ul class="nav">
                            <li><a href="/?act=index">Beranda</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Layanan</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/?act=petunjuk-pasang-air">Pemasangan Saluran Air</a>
                                    <a class="dropdown-item" href="/?act=petunjuk-pesan-air">Pemesanan Air Galon</a>
                                </div>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perusahaan</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/?act=tentang">Tentang Kami</a>
                                    <a class="dropdown-item" href="/?act=kontak">Kontak</a>
                                </div>
                            </li>
                            <li>
                                <div class="main-button">
                                    <a class="" href="/?act=login">MASUK</a>
                                </div>
                            </li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- Menu End -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Form Area Start -->
    <div class="main-banner" id="top">
        <img id="bg-full" src="../aset/images/login-1920x1080.jpg"/>

        <div class="bg-overlay form">
            <div class="user-form">
                <form action="/?act=form-register" method="POST">
                    <h2>DAFTAR</h2>
                    
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input name="phone" type="number" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <input name="conPassword" type="password" class="form-control" placeholder=" Konfirmasi Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="main-button btn-block">DAFTAR</button>
                    </div>
                    <div class="form-group">
                        Sudah punya akun? <a href="/?act=login">Masuk</a>
                    </div>
                    <div class="alert alert-danger <?= $alert; ?>" role="alert">
                        Kesalahan : <?= $e; ?>
                    </div>
                    <footer>
                        <p> Copyright &copy; 2021 TIRTA<em>GO</em> </p>
                    </footer>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Area End -->

    <!-- jQuery -->
    <script src="../aset/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../aset/js/popper.js"></script>
    <script src="../aset/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../aset/js/scrollreveal.min.js"></script>
    <script src="../aset/js/waypoints.min.js"></script>
    <script src="../aset/js/jquery.counterup.min.js"></script>
    <script src="../aset/js/imgfix.min.js"></script> 
    <script src="../aset/js/mixitup.js"></script> 
    <script src="../aset/js/accordions.js"></script>
    
    <!-- Global -->
    <script src="../aset/js/custom.js"></script>

    </body>
</html>