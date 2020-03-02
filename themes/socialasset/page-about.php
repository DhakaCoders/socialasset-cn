<?php 
/*
  Template Name: About
*/
  get_camp_header();
  $thisID = get_the_ID();
?>
<?php
  $gwform = get_field('form', $thisID);
  $gmap = get_field('googlemaps', $thisID);
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $adres = $gmap['address'];
  $gmapsurl = $gmap['google_map_url'];
  $email = $gmap['email'];
  $show_telefoon = $gmap['telephone'];
  $schedules = $gmap['schedule'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $smedias = get_field('socialmedia', 'options');
  $google_map = $gmap['maps'];
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/wwd-banner.png);">
    </div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-banner-des-inner">
              <h1 class="banner-page-title abt-page-title">We Help People Support NGOs <br/>& <span>Solve Social Problems</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<section class="about-story-sec">
  <div class="about-story-des">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about-story-des-main text-center">
            <h3>Social Asset Story</h3>
            <p>Social Asset was founded with Solving Social Problems in mind. <br/> Our vision is to build a seamless platform that is easy and transparent, for both NGOs and Businesses to transact. We envision Social Asset as the go-to place for all lore ipsum</p>
          </div>
        </div>
      </div>
    </div>     
  </div>
  <div class="about-story-bg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about-story-bg-main">
            <div class="about-story-bg-1">
              <div class="about-story-bg-1-main m-auto" style="background: url('<?php echo THEME_URI; ?>/assets/images/about-story-bg-1.png')"></div>
            </div>
            <div class="about-story-bg-2">
              <div class="about-story-bg-2-main" style="background: url('<?php echo THEME_URI; ?>/assets/images/about-story-bg-2.png')"></div>
            </div>
            <div class="about-story-bg-3 clearfix">
              <div class="about-story-bg-3-main" style="background: url('<?php echo THEME_URI; ?>/assets/images/about-story-bg-3.png')"></div>
              <div class="about-story-bg-logo">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/about-story-logo.png" alt=""></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>     
  </div>   
</section> 


<section class="core-value-sec text-center text-white">
  <span class="core-value-lft-btm-bg">
    <img src="<?php echo THEME_URI; ?>/assets/images/core-value-lft-btm-icon.png" alt="">
  </span>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="core-value-head">
          <h2>Our Core Values</h2>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="core-value-col-innr">
          <i><img src="<?php echo THEME_URI; ?>/assets/images/core-value-icon-1.png" alt=""></i>
          <h6>Transparency</h6>
          <p>We believe in providing our customers with unprecedented visibility for their businesses. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="core-value-col-innr">
          <i><img src="<?php echo THEME_URI; ?>/assets/images/core-value-icon-2.png" alt=""></i>
          <h6>networking</h6>
          <p>We believe in providing our customers with unprecedented visibility for their businesses. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="core-value-col-innr">
          <i><img src="<?php echo THEME_URI; ?>/assets/images/core-value-icon-3.png" alt=""></i>
          <h6>fresh ideas</h6>
          <p>We believe in providing our customers with unprecedented visibility for their businesses. </p>
        </div>
      </div>
    </div>
  </div> 
</section>


<section class="abt-social-asset-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="abt-social-asset-innr clearfix">
          <div class="abt-social-asset-lft">
            <h4>What is <strong>Social Asset?</strong></h4>
            <p><em>“Social Asset is the interface between business and social problems”</em></p>
            <p>Our Platform achieves the link between the needs of society, inparticular, the needs of local government, NGOs and social enterprises, with businesses that meet these needs as CSR (Corporate Social Responsibility) actions.</p>
          </div>
          <div class="abt-social-asset-rgt">
            <ul class="ulc">
              <li>
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/abt-social-asset-rgt-1.png" alt="">
                </i>
                <h6>Be Supported</h6>
                <p><strong>For NGO’s, social enterprises, innovators, social initiatives, government.</strong> Because we believe in your values and goals we want to help you be supported!</p>
              </li>
              <li>
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/abt-social-asset-rgt-2.png" alt="">
                </i>
                <h6>Support</h6>
                <p><strong>For Businesses</strong> By improving societies’ conditions you improve also your market</p>
              </li>
              <li>
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/abt-social-asset-rgt-3.png" alt="">
                </i>
                <h6>Our Supporters</h6>
                <p><strong>Social Asset’s power</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
<?php get_footer(); ?>