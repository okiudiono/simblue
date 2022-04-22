 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM BLU-e</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/dist/css/skins/_all-skins.min.css"> 
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/pnotify/pnotify.custom.min.css" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 
<style type="text/css">
  body{
    background: url("<?php echo Yii::app()->theme->baseUrl; ?>/assets/bg_blue_back.jpg") no-repeat center center fixed;
    background-size: cover;
    opacity: 1;
  }
  .box {
    -webkit-box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.55);
    box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.75);
    opacity: 0.95;
    border-top: 5px solid;
  }
  .info-box {
    -webkit-box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.75);
    box-shadow: -1px 6px 45px -12px rgba(0,0,0,0.75);
    opacity: 0.95;
  }
  .content-header{
    color: white;
  }

  .content-header .small{
    color: white;
  } 

</style>

</head>
<body class="hold-transition skin-red layout-top-nav"> 
<div class="wrapper">

 
		<header class="main-header"> 
			<nav class="navbar navbar-static-top"> 

				<div class="navbar-header">
					<a href="/sakiptegal/apps" class="navbar-brand"><i class="fa fa-windows"></i> SIM BLU-e </a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li ><a href="<?php echo Yii::app()->createUrl('apps/')?>"><i class="fa fa-home"></i> Home </a></li>    
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-database"></i> MASTER DATA<span class="caret"></span></a>
              <ul class='dropdown-menu multi-level'>   
                <li ><a href="/uppkb/apps"> USER AKUN </a></li>      
              </ul>
            </li>    --> 
					</ul> 
				</div> 

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav"> 
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/build/avatar2.png" class="user-image" alt="User Image">
								<span class="hidden-xs"><?=Yii::app()->user->getState('role')?></span>
							</a> 
						</li>

						<li class="user user-menu bg-yellow">
							<a href="<?php echo Yii::app()->createUrl('logout')?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
						</li>

						<!-- Control Sidebar Toggle Button -->
					</ul> 
				</div> 
			</nav>
		</header>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <?= $content; ?> 
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>V</b> 1.1
    </div>
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">Sistem Pengawasan Angkutan Barang</a>.</strong> All rights
    reserved.
  </footer>

</div>

 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts --> 
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/dist/js/adminlte.min.js"></script> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/pnotify/pnotify.custom.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>


<script type="text/javascript">
    function msgBerhasil(prm){

      new PNotify({
        title: 'Berhasil',
        text: prm,
        type: 'success',
        addclass: "stack-topleft"
      }); 
    }
    function msgGagal(prm){

      new PNotify({
        title: 'Gagal!',
        text: prm,
        type: 'error',
        addclass: "stack-topleft"
      });
    }
  $('.zdatepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    //startDate: '-3d'
  });
 
  $(document).ready(function() {
      $(".js-example-basic-single").select2();
  });
</script>
</body>

<style type="text/css">
    .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #000;
    margin-top: 5px;
    margin-right: 2px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

</style>

</html> 