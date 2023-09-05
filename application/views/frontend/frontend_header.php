<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets');?>/frontend/assets/img/laboratory_icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets');?>/frontend/css/styles.css" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <!-- Datatables -->
        <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            .dataTables_paginate{
                float: right;
            }
        /* Mengubah warna latar belakang dan teks tombol pagination */
        .dataTables_paginate .paginate_button {
          background-color: #337ab7;
          padding: 3px 9px !important;
          color: #ffffff;
          border: 1px solid #337ab7;
          border-radius: 5px;
        }

        /* Mengubah warna latar belakang dan teks tombol pagination aktif */
        .dataTables_paginate .paginate_button.current {
          background-color: #5cb85c;
          padding: 3px 9px !important;
          color: #ffffff;
          border: 1px solid #5cb85c;
          border-radius: 5px;
        }

        /* Mengubah warna latar belakang dan teks tombol pagination saat di-hover */
        .dataTables_paginate .paginate_button:hover {
          background-color: #5bc0de;
          padding: 3px 9px !important;
          color: #ffffff;
          border: 1px solid #5bc0de;
          border-radius: 5px;
        }

        /* Mengubah warna teks pada tanda elipsis (...) */
        .dataTables_paginate .ellipsis {
          color: #777;
        }

        /* Mengubah warna latar belakang tombol pagination yang tidak dapat di-klik */
        .dataTables_paginate .paginate_button.disabled {
          background-color: #ccc;
          padding: 3px 9px !important;
          color: #ffffff;
          border: 1px solid #ccc;
          border-radius: 5px;
        }

        /* Gaya kustom untuk pagination */
        .dataTables_wrapper .dataTables_paginate {
            margin: 5px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            margin: 0 5px;
        }

        .chart-title {
        text-align: center;
        margin-bottom: 10px;
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">SIM - Monitoring LAB</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#grafik">Grafik</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('backendhome/login'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/laboratory.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">SIM - Monitoring LAB</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Departemen - Teknik Kimia Industri</p>
            </div>
        </header>