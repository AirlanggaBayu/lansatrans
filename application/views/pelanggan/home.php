<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Lansa Trans Travel</title>

    <!-- Styles -->
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?= base_url('assets/pelanggan/') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/pelanggan/') ?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url('assets/pelanggan/') ?>css/swiper.css" rel="stylesheet">
    <link href="<?= base_url('assets/pelanggan/') ?>css/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url('assets/pelanggan/') ?>css/styles2.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('assets/pelanggan/') ?>images/lansatrans.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom bg-dark fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url('assets/pelanggan/') ?>images/lansatrans.png" style="height:50px; width: 50px;" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse container" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url('pelanggan/home') ?>">HOME </a>
                </li>
                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">TARIF TRAVEL</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('pelanggan/home/ekonomi') ?>"><span class="item-text">EKONOMI</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url('pelanggan/home/eksekutif') ?>"><span class="item-text">EKSEKUTIF</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <?php if ($this->session->userdata('username_pelanggan') != '') { ?>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?= base_url('pelanggan/reservasi') ?>">RESERVASI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username_pelanggan') ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('pelanggan/profil') ?>"><span class="item-text">PROFIL</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="<?= base_url('pelanggan/histori') ?>"><span class="item-text">RIWAYAT PEMESANAN</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="<?= base_url('auth_pelanggan/logout') ?>"><span class="item-text">LOG OUT</span></a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?= base_url('auth_pelanggan') ?>">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?= base_url('auth_pelanggan/registration') ?>">REGISTRASI</a>
                    </li>
                <?php } ?>
            </ul>
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row ml-4 mt-3">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">Terima kasih atas kritik dan saran <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="col-md-6">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>LANSA TRANS <span id="js-rotating">TOUR, TRAVEL</span></h1>
                            <p class="p-heading p-large">Perumahan Muktisari
                                Blok G Nomor 2 Jember , Jawa Timur</p>

                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- tentnag kami -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">tentang</div>
                        <h2>LANSATRANS</h2>
                        <p> Lansa Trans merupakan jasa travel executive yang melayani rute
                            Jember-Malang, Jember-Surabaya, dan Jember-Denpasar</p>
                        <p class="testimonial-text">Lansa Trans beralamat di Perum. Muktisari
                            Blok G Nomer 2 Jember , Jawa Timur</p>
                        <div class="testimonial-author">NUMPAK LANSA DONG - SING DUWE LANSA</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container ml-5">
                        <img class="img-fluid" src="<?= base_url('assets/pelanggan/') ?>images/lansakotak.jpeg" style="height:450px; width: 500px;" alt="lternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-cash-register fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">RESERVASI</h4>
                            <p>Permudah Pemesanan Tiket Secara Online Tanpa Harus Repot Untuk Keluar Rumah, Hanya Dengan
                                Klik Semua Jadi Mudah</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-route fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">RUTE</h4>
                            <p>Pilih Rute Yang Tersedia Sehingga Dengan Mudah Untuk Mengetahui Rute Tujuan Anda Dan
                                Tentunya Dapat Dilakukan Dengan Mudah</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-money-bill-wave fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">TARIF</h4>
                            <p>Dapat Memilih Tarif Sesuai Kelas Yang Anda Inginkan Sehingga Perjalanan Anda Akan Sangat
                                Dimudahkan Dengan Memilih Kelas Yang Tersedia</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->
    <!-- Keluhan  -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="section-title">KRITIK DAN SARAN</div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form action="<?php echo base_url('Pelanggan/Home/saran/'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="pengirim" id="cname" required>
                            <label class="label-control" for="cname">Nama*</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="saran" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Pesan Anda*</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control-textarea" value="<?php echo date("Y-m-d"); ?>" name="tgl_diterima" id="cmessage" required></input>

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
    <!-- end Keluhan -->
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Tentang Lansatrans Travel</h4>
                        <p class="white">Lansa Trans merupakan jasa travel executive yang melayani rute
                            Jember-Malang, Jember-Surabaya, dan Jember-Denpasar. Lansa Trans beralamat di Perum.
                            Muktisari
                            Blok G Nomer 2 Jember , Jawa Timur</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>RUTE</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white">Jember-Malang</a>
                            </li>
                            <li>
                                <a class="white">Jember-Surabaya</a>
                            </li>
                            <li>
                                <a class="white">Jember-Denpasar</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>MOBIL</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white">businessgrowth.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">influencers.com</a>
                            </li>
                            <li class="media">
                                <a class="white" href="#your-link">optimizer.net</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">unicorns.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">staffmanager.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">association.gov</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?= base_url('assets/pelanggan/') ?>js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>