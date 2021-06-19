<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../aset/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <title>Tentang Kami | TIRTAGO</title>

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
                                    <a class="dropdown-item" href="/?act=<?= $linkPasang; ?>">Pemasangan Saluran Air</a>
                                    <a class="dropdown-item" href="/?act=<?= $linkPesan; ?>">Pemesanan Air Galon</a>
                                    <a class="dropdown-item <?= $riwayatMenu; ?>" href="/?act=riwayat">Riwayat Permintaan</a>
                                </div>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perusahaan</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="/?act=tentang">Tentang Kami</a>
                                    <a class="dropdown-item" href="/?act=kontak">Kontak</a>
                                </div>
                            </li>
                            <li>
                                <div class="<?= $masuk_btn; ?>" class="main-button">
                                    <a href="/?act=login">MASUK</a>
                                </div>
                                <a class="<?= $profil_btn; ?>" href="/?act=profil"><i class="fa fa-user"></i> <?= $username; ?> </a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(../aset/images/factory-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Mengenal lebih dekat 
                            <br>TIRTA<em>GO</em>
                        </h2>
                        <p>Perusahaan air minum lokal yang memberikan pelayanan berupa air bersih, baik pemasangan saluran air maupun pemesanan air galon siap minum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Classes Start -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Visi & Misi</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Latar Belakang</a></a></li>
                  <li><a href='#tabs-3'><i class="fa fa-heart"></i> Profil Pemilik </a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                      <h4>Visi</h4>
                      <p>Menjadi perusahaan air minum yang mampu mengedepankan kebersihan, kesehatan, dan kebutuhan masyarakat.</p>
                      <h4>Misi</h4>
                      <p>Memberikan kemudahan akses air bersih dan sehat kepada masyarakat serta mengedepankan kebutuhan pelanggan.</p>
                  </article>
                  <article id='tabs-2'>
                      <h4>Latar Belakang</h4>
                      <p>TIRTA<em>GO</em> muncul untuk memenuhi kebutuhan masyarakat akan layanan perairan yang bersih, sehat, dan terjamin kualitasnya.</p>
                      <p>Selain itu, TIRTA<em>GO</em> juga turut mendukung rencana aksi global mengenai Sustainable Development Goals (SDGs) yang terdiri dari 17 tujuan, dengan cara menerapkan salah satu tujuan dari rencana tersebut yaitu akses air bersih dan sanitasi.</p>
                  </article>
                  <article id='tabs-3'>
                      <div class="text-center"><img src="../aset/images/me.jpeg" alt="foto-pemilik"></div>
                      <h4 class="text-center">Arham Zainul Abidin</h4>
                      <p>Seorang mahasiswa biasa saja dari Universitas Jember yang memiliki hobi fotografi, nonton film, dan trading.
                          Memiliki cita-cita bisa bekerja di perusahaan start-up ternama.
                      </p>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- Our Classes End -->

    <!-- Call to Action Start -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(../aset/images/banner-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Hubungi <em>kami</em></h2>
                        <p>
                            Jangan ragu untuk bertanya.
                            <br> Konsultasikan apa yang Anda butuhkan dan keluhkan, Kami siap menjawab.
                            Kritik dan saran dari Anda sangat berarti bagi Kami.
                        </p>
                        <div class="main-button">
                            <a href="/?act=kontak">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->

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