<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB Online | Super Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PPD</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PPDB</b> Online</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li>
            <a href="<?php echo Yii::app()->createUrl('logout')?>">
            <span class="hidden-xs">Log Out</span>
            </a>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php $kamu=Yii::app()->user->getState('nama_lengkap'); echo $kamu; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Super Admin</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="header">PANEL MTs</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data MTs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mastersiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/masteralamat"><i class="fa fa-circle-o"></i> Data Alamat Siswa</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/sekolahasal"><i class="fa fa-circle-o"></i> Data Sekolah Asal</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/masterortu"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/masternilai"><i class="fa fa-circle-o"></i> Data Nilai</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/masterprestasi"><i class="fa fa-circle-o"></i> Data Prestasi</a></li>
          </ul>
        </li>

        

        <li class="treeview">

          <a href="#">
            <i class="fa fa-book"></i> <span>Statistik MTs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekapstatusasal"><i class="fa fa-circle-o text-red"></i> <span>Asal Sekolah</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekapkabasal"><i class="fa fa-circle-o text-yellow"></i> <span>Kabupaten Asal Sekolah</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekapalamatortu"><i class="fa fa-circle-o text-yellow"></i> <span>Alamat Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekapjeniskelamin"><i class="fa fa-circle-o text-aqua"></i> <span>Jenis Kelamin</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekappendortu"><i class="fa fa-circle-o text-aqua"></i> <span>Pendidikan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekappekortu"><i class="fa fa-circle-o text-green"></i> <span>Pekerjaan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekappengortu"><i class="fa fa-circle-o text-blue"></i> <span>Penghasilan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/report/rekapinfodari"><i class="fa fa-circle-o text-orange"></i> <span>Sumber Informasi Madrasah</span></a></li>
        </ul></li>

        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/indexed"><i class="fa fa-file-excel-o"></i> <span>Export Excel MTs</span></a></li>
        

        <li class="header">PANEL MA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data MA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mamastersiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mamasteralamat"><i class="fa fa-circle-o"></i> Data Alamat Siswa</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/masekolahasal"><i class="fa fa-circle-o"></i> Data Sekolah Asal</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mamasterortu"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mamasternilai"><i class="fa fa-circle-o"></i> Data Nilai</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mamasterprestasi"><i class="fa fa-circle-o"></i> Data Prestasi</a></li>
          </ul>
        </li>

        <li class="treeview">
        
          <a href="#">
            <i class="fa fa-book"></i> <span>Statistik MA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekapstatusasal"><i class="fa fa-circle-o text-red"></i> <span>Asal Sekolah</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekapkabasal"><i class="fa fa-circle-o text-yellow"></i> <span>Kabupaten Asal Sekolah</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekapalamatortu"><i class="fa fa-circle-o text-yellow"></i> <span>Alamat Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekapjeniskelamin"><i class="fa fa-circle-o text-aqua"></i> <span>Jenis Kelamin</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekappendortu"><i class="fa fa-circle-o text-aqua"></i> <span>Pendidikan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekappekortu"><i class="fa fa-circle-o text-green"></i> <span>Pekerjaan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekappengortu"><i class="fa fa-circle-o text-blue"></i> <span>Penghasilan Orang Tua</span></a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/mareport/rekapinfodari"><i class="fa fa-circle-o text-orange"></i> <span>Sumber Informasi Madrasah</span></a></li>
        </ul></li>

        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/maindexed"><i class="fa fa-file-excel-o"></i> <span>Export Excel MA</span></a></li>
        <br>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/superadmin/users"><i class="fa fa-user"></i> <span>Daftar User</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
    <div class="container">
        <?php echo $content; ?>
    <!-- Content Header (Page header) -->
    </div>
    </section><!-- Close Containt -->

</div><!-- Close Content Wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#"> ZM WebApp | Bawor.Net</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- <script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo Yii::app()->theme->baseUrl;?>/dist/js/demo.js"></script>
</body>
</html>
