<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pemerintah Kabupaten Banyumas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/css/social.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/css/themes/social.theme-blue.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/images/favicon.ico" />
    <style>
      .wraper #main{
        margin-top: 40px;
      }
    #main {
      margin-left: 0;
    }
      .social-navbar {
      left: 0;
      }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../..//assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- We add the sidebar-full class to the wrapper
    This is necessary for padding on left the navbar and
    the bady content -->
    <div class="wraper">
      <header>
        <nav class="navbar navbar-fixed-top social-navbar">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="brand" href="#">Pemerintah Kabupaten Banyumas</a>
              <ul class="nav pull-right nav-indicators">       
                <!-- BEGIN DROPDOWN MESSAGES -->
                <li class="dropdown nav-messages">
                  <!-- BEGIN DROPDOWN TOGGLE -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="badge">8</span>
                    <i class="icon-envelope"></i>
                  </a>
                  <!-- END DROPDOWN TOGGLE -->
                  <!-- BEGIN DROPDOWN MENU -->
                  <ul class="dropdown-menu">
                    <!-- BEGIN DROPDOWN HEADER -->
                    <li class="nav-messages-header">
                      <a tabindex="-1" href="#">You have <strong>8</strong> new messages</a>
                    </li>
                    <!-- END DROPDOWN HEADER -->
                    <!-- BEGIN DROPDOWN ITEMS -->
                    <li class="nav-message-body">
                      <a>
                          <img src="../assets/img/people-face/user1_55.jpg" alt="User">
                          <div>
                            <small class="pull-right">Just Now</small>
                            <strong>Yadra Abels</strong>
                          </div>
                          <div>
                            Lorem ipsum dolor sit amet, consectetur...
                          </div>
                      </a>
                    </li>
                    <li class="nav-message-body">
                      <a>
                          <img src="../assets/img/people-face/user2_55.jpg" alt="User">
                          <div>
                            <small class="pull-right">Just Now</small>
                            <strong>Cesar Mendoza</strong>
                          </div>
                          <div>
                            Lorem ipsum dolor sit amet, consectetur...
                          </div>
                      </a>
                    </li>
                    <li class="nav-message-body">
                      <a>
                          <img src="../assets/img/people-face/user3_55.jpg" alt="User">
                          <div>
                            <small class="pull-right">Just Now</small>
                            <strong>John Doe</strong>
                          </div>
                          <div>
                            Lorem ipsum dolor sit amet, consectetur...
                          </div>
                      </a>
                    </li>
                    <li class="nav-message-body">
                      <a>
                          <img src="../assets/img/people-face/user4_55.jpg" alt="User">
                          <div>
                            <small class="pull-right">Just Now</small>
                            <strong>Tobei Tsumura</strong>
                          </div>
                          <div>
                            Lorem ipsum dolor sit amet, consectetur...
                          </div>
                      </a>
                    </li>
                    <!-- END DROPDOWN ITEMS -->
                    <!-- BEGIN DROPDOWN FOOTER -->
                    <li class="nav-messages-footer">
                      <a tabindex="-1" href="pages/chat-inbox.html">View all messages
                      </a>
                    </li>
                    <!-- END DROPDOWN FOOTER -->
                  </ul>
                  <!-- END DROPDOWN MENU -->
                </li>
                <!-- END DROPDOWN MESSAGES -->

                <li class="divider-vertical"></li>
                <!-- BEGIN EXTRA DROPDOWN -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="pages/basic-user-profile.html"><i class="icon-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
                    <li><a href="login.html"><i class="icon-off"></i> Log Out</a></li>
                    <li class="divider"></li>
                    <li><a href="pages/faq.html"><i class="icon-info-sign"></i> Help</a></li>
                  </ul>
                </li>
                <!-- END EXTRA DROPDOWN -->
             </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- BEGIN MAIN CONTAINER -->
      <div id="main">
        <!-- BEGIN CONTENT CONTANER -->
        <div class="container-fluid">
           <div class="row-fluid">
               <?php echo $content; ?>
          </div>
        </div>
   <!-- END CONTENT CONTAINER -->
      </div>
      <!-- END MAIN CONTAINER -->
    </div>
    <!-- END WRAPER -->
      </div>
    </div>
    <!-- Le javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/plugins/jquery/jquery.min.js"><\/script>')</script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/eoffice/plugins/twitter-bootstrap/bootstrap.js"></script>


  </body>
</html>

