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
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url('pelanggan/home/rute_travel')?>">RUTE TRAVEL</a>
                </li>
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">TARIF TRAVEL</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('pelanggan/home/ekonomi')?>"><span class="item-text">EKONOMI</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url('pelanggan/home/eksekutif')?>"><span class="item-text">EKSEKUTIF</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                
                <?php if($this->session->userdata('username_pelanggan') != ''){?>
                    <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url('pelanggan/reservasi')?>">RESERVASI</a>
                </li>    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username_pelanggan')?></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('pelanggan/profil')?>"><span class="item-text">PROFIL</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url('pelanggan/histori')?>"><span class="item-text">RIWAYAT PEMESANAN</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url('auth_pelanggan/logout')?>"><span class="item-text">LOG OUT</span></a>
                    </div>
                </li>
                <?php }else {?>
                    <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url('auth_pelanggan')?>">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url('auth_pelanggan/registration')?>">REGISTRASI</a>
                </li>
                
            </ul>
            <?php } ?>
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- end of navbar -->