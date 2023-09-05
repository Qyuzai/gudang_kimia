<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets');?>/frontend/assets/img/laboratory_icon.png" />
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="<?php echo base_url('assets');?>/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url('assets');?>/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->    
    <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets');?>/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets');?>/backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('backendhome/admin'); ?>" class="site_title"><i class="fa fa-flask"></i> <span>Monitoring LAB</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets');?>/frontend/assets/img/lab-technician.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Administrator</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('backendhome/admin'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('backendhome/list_item'); ?>">Pembelian Bahan Kimia</a></li>
                      <li><a href="<?php echo base_url('backendhome/list_limbah'); ?>">Alokasi Limbah</a></li>
                      <li><a href="<?php echo base_url('backendhome/list_request'); ?>">Request Item</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('backendhome/list_user'); ?>">Kelola User</a></li>
                      <li><a href="<?php echo base_url('backendhome/list_bkimia'); ?>">Kelola Bahan Kimia</a></li>
                      <!-- <li><a href="typography.html">Kelola Jenis</a></li> -->
                      <li><a href="<?php echo base_url('backendhome/form_profilweb'); ?>">Kelola Profil</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url('assets');?>/frontend/assets/img/lab-technician.png" alt="">Administrator
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span>Settings</span>
                        </a>
                      <a class="dropdown-item"  href="<?php echo base_url('backendhome/login'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->