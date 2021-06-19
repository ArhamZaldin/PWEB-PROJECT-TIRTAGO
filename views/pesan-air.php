<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../aset/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <title>Pemesanan Air Galon | TIRTAGO</title>

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
                        <a href="/?act=index" class="logo">TIRTA<em>GO</em></a>
                        <!-- Logo End -->
                        <!-- Menu Start -->
                        <ul class="nav">
                            <li><a href="/?act=index">Beranda</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Layanan</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/?act=pasang-air">Pemasangan Saluran Air</a>
                                    <a class="dropdown-item active" href="/?act=pesan-air">Pemesanan Air Galon</a>
                                    <a class="dropdown-item" href="/?act=riwayat">Riwayat Permintaan</a>
                                </div>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perusahaan</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/?act=tentang">Tentang Kami</a>
                                    <a class="dropdown-item" href="/?act=kontak">Kontak</a>
                                </div>
                            </li>
                            <li>
                                <a href="/?act=profil"><i class="fa fa-user"></i> <?= $username; ?> </a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(../aset/images/product-pesan-air-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Pemesanan Air Galon TIRTA<em>GO</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Classes Start -->
    <section class="section form" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Petunjuk</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Formulir</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <h4>Prosedur Pemesanan Air Galon TIRTA<em>GO</em></h4>
                            <!-- Petunjuk Start -->
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="feature-item">
                                        <div class="number">
                                            <div> 1 </div>
                                        </div>
                                        <div class="right-content">
                                            <h4>Masukkan data yang dibutuhkan sesuai dengan formulir pemesanan air galon.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="feature-item">
                                        <div class="number">
                                            <div> 2 </div>
                                        </div>
                                        <div class="right-content">
                                            <h4>Tunggu proses pemesanan air galon dikonfirmasi oleh admin TIRTA<em>GO</em>. Anda dapat mengeceknya pada menu <strong>Layanan</strong> bagian <strong>riwayat permintaan</strong>.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Petunujuk End -->
                    </article>
                    <form id="tabs-2" action="/?act=form-layanan" method="POST">
                        <h4>Prosedur Pemesanan Air Galon TIRTA<em>GO</em></h4>
                        
                        <div class="form-group">
                            <input name="service" type="text" class="form-control" value="Pesan Air" hidden>
                        </div>
                        <div class="form-group">
                            <input name="status" type="text" class="form-control" value="Belum Dikonfirmasi" hidden>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" value="<?= $username; ?>" hidden>
                        </div>
                        <div class="form-group">
                            <input name="phone" type="number" class="form-control" placeholder="Telepon" required>
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input name="address" type="text" class="form-control" placeholder="Alamat Lengkap" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="main-button btn-block">KIRIM</button>
                        </div>
                        <div class="alert alert-danger <?= $alert; ?>" role="alert">
                            Kesalahan : <?= $e; ?>
                        </div>
                    </form>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- Our Classes End -->

    <!-- Footer Start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright &copy; 2021 TIRTA<em>GO</em>
                    </p>
                </div>
            </div>
        </div>
    </footer>

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