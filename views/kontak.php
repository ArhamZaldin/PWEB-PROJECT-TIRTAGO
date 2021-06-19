<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../aset/css/font-awesome.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <title>Kontak | TIRTAGO</title>

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
                                    <a class="dropdown-item" href="/?act=tentang">Tentang Kami</a>
                                    <a class="dropdown-item active" href="/?act=kontak">Kontak</a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(../aset/images/banner-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Hubungi <em>Kami</em></h2>
                        <p>Jangan ragu untuk bertanya ataupun memberikan kritik dan saran kepada kami.
                            <br>Satu pendapat dari Anda sangat berharga.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Item Start -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Informasi <em>Kontak</em></h2>
                        <img src="../aset/images/line-dec.png" alt="waves">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5 class="text-break">081234567890</h5>
                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h5 class="text-break">192410101095@mail.unej.ac.id</h5>
                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h5 class="text-break">Tempursari, Lumajang, Jawa Timur, 67375</h5>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Item End -->
   
    <!-- Contact Us Area Starts -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe id="map-desktop" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2003.464550270008!2d112.95054107242363!3d-8.30405615523608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-8.304668699999999!2d112.95152309999999!4m5!1s0x2dd6127e7709eb15%3A0x597c73591e861186!2sJl.%20Raya%20Sumororto%2C%20Sumoroto%2C%20Tempurrejo%2C%20Tempursari%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur%2067375!3m2!1d-8.3046165!2d112.9513643!5e0!3m2!1sid!2sid!4v1623948846294!5m2!1sid!2sid" width="720" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <iframe id="map-mobile" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2003.464550270008!2d112.95054107242363!3d-8.30405615523608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-8.304668699999999!2d112.95152309999999!4m5!1s0x2dd6127e7709eb15%3A0x597c73591e861186!2sJl.%20Raya%20Sumororto%2C%20Sumoroto%2C%20Tempurrejo%2C%20Tempursari%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur%2067375!3m2!1d-8.3046165!2d112.9513643!5e0!3m2!1sid!2sid!4v1623948846294!5m2!1sid!2sid" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(../aset/images/product-pesan-air-720x480.jpeg)">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="email" type="email" value="<?= $email; ?>" hidden>
                                  </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="subject" type="text" placeholder="Subjek" required>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" placeholder="Pesan" required></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="button" class="main-button" data-toggle="modal" data-target="#contact-modal">
                                        Kirim Pesan
                                    </button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                        <!-- modal start -->
                        <div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h4>Untuk terhubung langsung dengan kami melalui website, silakan masuk terlebih dahulu</h4>
                                        <div class="main-button">
                                            <a href="/?act=login">MASUK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area Ends -->
    
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