<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../aset/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <title>TIRTAGO</title>

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
                            <li><a href="/?act=index" class="active">Beranda</a></li>
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
                                    <a class="dropdown-item" href="/?act=tentang">Tentang Kami</a>
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

    <!-- Main Banner Area Start -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-full">
            <source src="../aset/images/water.mp4" type="video/mp4" />
        </video>

        <div class="bg-overlay header-text">
            <div class="caption">
                <h2>Nikmati kesegaran air bersih hanya di 
                    <br> TIRTA<em>GO</em>
                </h2>
                <div class="main-button">
                    <a href="/?act=<?= $linkPesan; ?>">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Banner Area End -->

   <!-- Product -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Layanan Tirta<em>Go</em></h2>
                        <img src="../aset/images/line-dec.png" alt="">
                        <p>Anda ragu dengan kualitas air di tempat Anda? 
                            <br> Tenang saja, Kami menyediakan apa yang Anda butuhkan.
                            <br> Kebutuhan acara besar maupun kebutuhan pribadi Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="product-item">
                        <div class="image-thumb">
                            <img src="../aset/images/product-pasang-air-720x480.jpg" alt="Pasang-Air">
                        </div>
                        <div class="down-content">

                            <h4>Pemasangan Saluran Air</h4>

                            <p>Cukupi kebutuhan air bersih di tempat Anda. Tak perlu ke mana-mana, Kami yang akan menghampiri Anda.</p>

                            <div class="main-button text-center">
                                <a href="/?act=<?= $linkPasang; ?>">Lihat Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-item">
                        <div class="image-thumb">
                            <img src="../aset/images/product-pesan-air-720x480.jpeg" alt="Pesan-Air">
                        </div>
                        <div class="down-content">

                            <h4>Pemesanan Air Galon</h4>

                            <p>Kebutuhan acara besar maupun kebutuhan pribadi, kami siap antarkan air galon siap minum ke tempat Anda.</p>

                            <div class="main-button text-center">
                                <a href="/?act=<?= $linkPesan; ?>">Lihat Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

        </div>
    </section>
    <!-- Product End -->

    <section class="section section-bg" id="why" style="background-image: url(../aset/images/factory-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Mengapa TIRTA<em>GO</em>?</h2>
                        <img src="../aset/images/line-dec.png" alt="">
                        <p>TIRTA<em>GO</em> merupakan perusahaan air minum lokal yang memberikan pelayanan berupa air bersih, baik pemasangan saluran air maupun pemesanan air galon siap minum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p> TIRTA<em>GO</em> memberikan pelayanan pengairan dengan harga terjangkau namun berkualitas menggunakan bantuan teknologi canggih, mumpuni, dan paling mutakhir. </p>

                        <p>
                            TIRTA<em>GO</em> telah melakukan uji tes di berbagai laboratorium, sehingga berani menjamin bahwa layanan pengairan yang diberikan 100% aman dan tidak dapat diragukan lagi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact start -->
    <section class="section section-bg contact" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Hubungi <em>Kami</em></h2>
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
    <!-- contact end -->
    
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