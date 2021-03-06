<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ekopz | <?php echo $nama; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Kop</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ekopz</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <form class="form-inline my-2 my-lg-0" style="margin-top: 7px; margin-right: 200px;">
              <input class="form-control mr-sm-2" style="width: 400px;" type="search" placeholder="Cari Menu" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/admin/upload_profile/<?php echo $_SESSION['foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama_koperasi']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/admin/upload_profile/<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama_koperasi']; ?>
                  <small>Tahun Berdiri : <?php echo $_SESSION['tahun_berdiri']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>Login/logout_koperasi" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="margin-top: 30px;">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/admin/upload_profile/<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama_koperasi']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> <br>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li <?php if(!empty($dashboard)) echo 'class="active treeview"'; ?>>
          <a href="<?php echo base_url(); ?>admin/Dashboard">
            <span>Dashboard</span>
          </a>
        </li>
        <li <?php if(!empty($anggota)) echo 'class="active treeview"'; ?>>
          <a href="<?php echo base_url(); ?>admin/anggota">
            <span>Anggota</span>
          </a>
        </li>
        <li <?php if(!empty($kas)) echo 'class="active treeview"'; ?> >
          <a href="<?php echo base_url(); ?>admin/Kas">
            <span>Buku Kas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" data-widget="tree">
            <li <?php if(!empty($kas_masuk)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/Kas/kas_masuk"><i class="fa fa-circle-o"></i> Rekapitulasi Kas Masuk</a></li>
            <li <?php if(!empty($kas_keluar)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/Kas/kas_keluar"><i class="fa fa-circle-o"></i> Rekapitulasi Kas Keluar</a></li>
          </ul>
        </li>
        <li <?php if(!empty($simpanpinjam)) echo "class='active treeview'"; ?>>
          <a href="<?php echo base_url(); ?>admin/simpanpinjam">
            <span>Simpan Pinjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if(!empty($simpanan)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/simpanpinjam/simpanan"><i class="fa fa-circle-o"></i>Simpanan</a></li>
            <li <?php if(!empty($pinjaman)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/simpanpinjam/pinjaman"><i class="fa fa-circle-o"></i>Pinjaman</a></li>
            <li <?php if(!empty($daftarsetoran)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/simpanpinjam/daftarsetoran"><i class="fa fa-circle-o"></i>Daftar Setoran</a></li>
          </ul>
        </li>
        <li <?php if(!empty($neraca)) echo 'class="active treeview"'; ?>>
          <a href="<?php echo base_url(); ?>admin/neraca">
            <span>Neraca</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if(!empty($neraca_lajur)) echo "class='active'"; ?>><a href="<?php echo base_url(); ?>admin/neraca/neraca_lajur"><i class="fa fa-circle-o"></i> Neraca Lajur</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>admin/shu">
            <span>SHU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/pembagian"><i class="fa fa-circle-o"></i> Pembagian SHU</a></li>
            <li><a href="<?php echo base_url(); ?>admin/laporan"><i class="fa fa-circle-o"></i> Laporan SHU</a></li>
          </ul>
        </li>
        <li <?php if(!empty($aktiva)) echo 'class="treeview"'; ?>>
          <a href="<?php echo base_url(); ?>admin/aktiva">
            <span>Daftar & Akutansi Aktiva Tetap</span>
          </a>
        </li>
        <li <?php if(!empty($store)) echo 'class="active treeview"'; ?>>
          <a href="<?php echo base_url(); ?>admin/store">
            <span>Store</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
