<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $headertab = get_field('headertab', 'options');
  $logoObj = $headertab['logo'];
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }?>
<header class="header">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
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
                      <li><a href="<?php echo esc_url(home_url('account/?login=ngo')); ?>">For <strong>NGOs</strong></a></li>
                      <li><a href="<?php echo esc_url(home_url('account/?login=user')); ?>">For <strong>USERs</strong></a></li>

                    </ul>
                  </div>
                  <button class="campaign-btn">Start a Campaign</button>
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
            <div class="humberger-menu humberger-menu-xlg">
              <?php 
                $catOptions = array( 
                    'theme_location' => 'cbv_popup_menu1', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'pupnavs',
                    'container_class' => 'pupnavs'
                  );
                wp_nav_menu( $catOptions );

                $menuOptions = array( 
                    'theme_location' => 'cbv_popup_menu2', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'pupnava',
                    'container_class' => 'pupnava'
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
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


            <!-- 
              If you want logged navbar. please use the class on '.humberger-menu .humberger-menu-xs  .logged-menu'
             -->
            <div class="humberger-menu humberger-menu-xs logged-menu clearfix">
              <div class="humberger-menu-items clearfix">
                <ul class="clearfix ulc xs-logout-inner-menu">
                  <li><a href="#">For NGOs</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">For Businesses</a>
                    <ul class="sub-menu">
                      <li><a href="#">sub menu item</a></li>
                      <li><a href="#">sub menu item</a></li>
                      <li><a href="#">sub menu item</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Campaigns</a></li>
                </ul>
                <ul class="clearfix ulc xs-logged-inner-menu">
                  <li><a href="#">How it Works</a></li>
                  <li><a href="#">Support a Campaign</a></li>
                </ul>
                <?php 
                $catOptions = array( 
                    'theme_location' => 'cbv_cat_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'catnav',
                    'container_class' => 'catnav'
                  );
                wp_nav_menu( $catOptions );

                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'hnav',
                    'container_class' => 'hnav'
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
              </div>
              <div class="xs-menu-footer clearfix">
                <div class="xs-login-area">
                  <h6>Login</h6>
                  <div>
                    <a href="#">For <strong>NGOs</strong></a>
                    <a href="#">For <strong>USERs</strong></a>
                  </div>
                </div>
                <div class="xs-hdr-login-profile">
                  <div class="hdr-login-profile">
                    <div>
                      <div class="hdr-login-profile-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hdr-login-profile-img.png">
                      </div>
                      <strong>Georgio</strong>
                    </div>
                    <ul class="ulc clearfix">
                      <li><a href="#">My Contributions</a></li>
                      <li><a href="#">My Profile</a></li>
                      <li>
                        <i class="fas fa-sign-out-alt"></i>
                        <a href="#">Log out</a>
                      </li>
                    </ul>
                  </div>
                </div>
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
  </div>
</header>