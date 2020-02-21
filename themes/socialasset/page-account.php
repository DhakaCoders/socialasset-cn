<?php 
/*
  Template Name: Account
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <meta charset="utf-8">
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
<body>
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
                      <a href="#">Log out</a>
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

<div class="content-center-cntlr gray-bg">
  <span class="fl-login-clip"><img src="<?php echo THEME_URI; ?>/assets/images/form-clip.png"></span>
  <section class="fl-login">
    <div class="login-form-cntlr clearfix">
      <div class="login-form-lft-col">
        <div class="fl-login-form">
          <div class="fl-tabs clearfix text-center">
            <button class="tab-link current" data-tab="tab-1"><span>REGISTER</span></button>
            <button class="tab-link" data-tab="tab-2"><span>Log in</span></button>
          </div>
          <div id="tab-1" class="fl-tab-content current">
            <div class="tab-con-inr">
              <form id="user-ngo-signup" accept-charset="utf-8" data-toggle="validator" onsubmit="SubmitSignupFormData(); return false">
                <div class="register-hdr-con">
                  <strong>Create your free online account</strong>
                  <span>Already have an account? <a href="#">Sign in here</a></span>
                </div>
                <div class="register-type-btn">
                  <a href="javascript:void(0)" class="register-ngo-btn">
                    I’m NGO - <span>BeSupported</span>
                  </a>
                  <a href="javascript:void(0)" class="register-supporter-btn">I’m Supporter</a>
                </div>
                <div class="register-type-con">
                    <div class="register-type-select">
                      <div class="sa-selctpicker-ctlr">
                        <select id="user-type" class="selectpicker">
                            <option selected="selected" value="ngo">I am a NGO</option>
                            <option value="user">I’m Supporter</option>
                        </select>
                      </div>
                    </div>
                    <div class="fl-input-field-row sa-input">
                      <label>NGO Name *</label>
                      <input type="text" id="owner-name" placeholder="Example Co.">
                    </div>
                    <div class="fl-input-field-row sa-input">
                      <label>Email *</label>
                      <input type="email" id="email" placeholder="Your Email">
                    </div>
                    <div class="fl-input-field-row-grd clearfix">
                      <div class="fl-input-field-row sa-input">
                        <label>Create a password *</label>
                        <input type="password" id="password" placeholder="Password">
                      </div>
                      <div class="fl-input-field-row sa-input">
                        <label>Confirm password *</label>
                        <input type="password" id="confirm-password" placeholder="Password">
                      </div>
                    </div>
                    <div class="agree-checkmark">
                      <div class="filter-check-row clearfix">
                        <input type="checkbox" id="agree" value="YES" required="required">
                        <span class="checkmark"></span> 
                        <label for="agree"> I have read & agree to Terms of Service</label>
                      </div>
                    </div>
                    <div class="fl-submit-btn w-full">
                      <input type="hidden" name="user_ngo_register_nonce" value="<?php echo wp_create_nonce('user-ngo-register-nonce'); ?>"/>
                      <input type="submit" value="Create Account">
                    </div>
                    <div class="fl-or-text">
                      <span>Or</span>
                    </div>
                    <div class="fl-sign-in-another">
                      <a class="gogle-login-btn" href="#">
                        <i class="fab fa-google"></i>
                        Sign In with Google
                      </a>
                    </div>
                  </div>
                </form>
            </div>
          </div>
          <div id="tab-2" class="fl-tab-content">
            <div class="tab-con-inr">
              <div class="login-form">
                <form>
                  <div class="fl-input-field-row sa-input">
                    <label>Email *</label>
                    <input type="email" name="" placeholder="Your Email">
                  </div>
                  <div class="fl-input-field-row sa-input">
                    <label>Password *</label>
                    <input type="password" name="" placeholder="Password">
                  </div>
                  <div class="fl-forget-row">
                    <a href="#">Forgot your password?</a>
                  </div>
                  <div class="fl-submit-btn w-full">
                    <input type="submit" value="Sign In">
                  </div>
                  <div class="fl-or-text">
                    <span>Or</span>
                  </div>
                  <div class="fl-sign-in-another">
                    <a class="gogle-login-btn" href="#">
                      <i class="fab fa-google"></i>
                      Sign In with Google
                    </a>
                    <a class="linkedin-login-btn" href="#">
                      <i class="fab fa-linkedin-in"></i>
                      Sign In with LinkedIn
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="login-page-rgt-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/login-page-rgt-fea-img.png);">
        
      </div>
    </div>
  </section>
</div>

 
<script src="<?php echo THEME_URI; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.sticky-sidebar.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/slick.slider/slick.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>

<script src="<?php echo THEME_URI; ?>/assets/js/nav.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>

</body>
</html>

