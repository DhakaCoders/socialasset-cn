<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/font-awesome/font-awesome.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/custom-fonts.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header hdr-has-shadow">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png"></a>
              </div>
            </div>
            <!-- 
              If you want logged navbar. please use the class on '.hdr-rgt .logged-menu'
             -->
            <div class="hdr-rgt">
              <nav class="main-nav logout-main-nav">
                <div class="main-nav-menu">
                  <ul class="clearfix ulc">
                    <li><a href="#">What We Do</a></li>
                    <li class="current-menu-item"><a href="#">For NGOs</a></li>
                    <li class="menu-item-has-children">
                      <a href="#">For Businesses</a>
                      <ul class="sub-menu">
                        <li><a href="#">sub menu item</a></li>
                        <li><a href="#">sub menu item</a></li>
                        <li><a href="#">sub menu item</a></li>
                        <li><a href="#">sub menu item</a></li>
                        <li><a href="#">sub menu item</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Campaigns</a></li>
                  </ul>
                </div>
                <div class="hdr-btns clearfix">
                  <div class="login-btn">
                    <button>LOGIN</button>
                    <ul class="ulc">
                      <li><a href="#">For <strong>NGOs</strong></a></li>
                      <li><a href="#">For <strong>USERs</strong></a></li>
                    </ul>
                  </div>
                  <button class="campaign-btn">Start a Campaign</button>
                </div>
              </nav>
              <nav class="main-nav logged-main-nav">
                <div class="main-nav-menu">
                  <ul class="clearfix ulc">
                    <li><a href="#">What We Do</a></li>
                    <li class="current-menu-item"><a href="#">How it Works</a></li>
                    <li><a href="#">Support a Campaign</a></li>
                  </ul>
                </div>
                <div class="hdr-login-profile">
                  <div class="hdr-login-profile-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hdr-login-profile-img.png">
                  </div>
                  <strong>Georgio</strong>
                  <ul class="ulc clearfix">
                    <li><a href="#">My Contributions</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li>
                      <i class="fas fa-sign-out-alt"></i>
                      <?php 
                      $user = wp_get_current_user();
                      if ( in_array( 'ngo', (array) $user->roles ) && is_user_logged_in() ) {
                      ?>
                      <a href="<?php get_ao_custom_logout('account'); ?>">Log out</a>
                      <?php
                      }elseif(in_array( 'subscriber', (array) $user->roles ) && is_user_logged_in()){
                      ?>
                      <a href="<?php get_ao_custom_logout('account'); ?>">Log out</a>
                      <?php
                      }elseif(in_array( 'business', (array) $user->roles ) && is_user_logged_in()){
                      ?>
                      <a href="<?php get_ao_custom_logout('business-login'); ?>">Log out</a>
                      <?php
                      }
                      ?>
                    </li>
                  </ul>
                </div>
              </nav>
              
              <div class="humberger-menu-btn">
                <strong>MENU</strong>
                <div class="humberger-menu-btn-lines">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              
            </div>
            <div class="humberger-menu">
              <ul class="clearfix ulc">
                <li><a href="#">Humanity</a></li>
                <li><a href="#">Animals</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Education</a></li>
              </ul>
              <ul class="clearfix ulc">
                <li><a href="#">What We Do</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
              <div class="languages-area">
                <label>Languages:</label>
                <div class="site-lang-holder clearfix">
                  <div class="site-lang">
                    <a href="#" class="active">En <span class="ede-down-angle"></span></a>
                    <a href="#">Gr</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>