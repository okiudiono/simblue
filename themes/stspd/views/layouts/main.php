<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>E-SAKIP | KABUPATEN TEGAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/img/lg_sakip_tegal.png" width="30%" />
                </a>

            </div>

            <div class="right-div">
                <a href="<?php echo Yii::app()->baseUrl; ?>/login" class="btn btn-danger pull-right"> <li class="fa fa-sign-in"></li> LOGIN E-SAKIPdddddd</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo Yii::app()->baseUrl; ?>/" class="menu-top-active">DASHBOARD</a></li>
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">SAKIP <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.html">UI ELEMENTS</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXAMPLE LINK</a></li>
                                </ul>
                            </li> 
                            <li><a href="table.html">TENTANG</a></li>
                            <li><a href="blank.html">KONTAK</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <?php echo $content; ?>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2021 ESAKIP | <a href="https://utama.tegalkab.go.id/" target="_blank"  > KABUPATEN TEGAL</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/assets_front/js/custom.js"></script>
  
</body>
</html>
