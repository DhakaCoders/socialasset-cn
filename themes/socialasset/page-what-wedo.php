<?php 
/*
  Template Name: What Wedo
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
              <h1 class="banner-page-title">What We Do</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<section class="wwd-des-section">
  <div class="wwd-des-grey-bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wwd-desc-sct-inner">
          <p>Social Asset was founded with Solving Social Problems in mind.<br> 
          Our vision is to build a seamless platform that is easy and transparent, for both NGOs and <br>Businesses to transact. We envision Social Asset as the go-to place for all lore ipsum</p>
          <div class="video-play">
            <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
              <img alt="" src="<?php echo THEME_URI; ?>/assets/images/wwd-des-video-img.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="join-journey-section">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="join-journey-section-inner">
          <div class="join-journey-sct-title">
            <h3>Join the journey from idea to market</h3>
          </div>
          <div class="join-journey-sct-grid">
            <ul class="ulc clearfix">
              <li>
                <div class="join-journey-sct-grid-inner clearfix">
                  <div class="join-journey-sct-grid-img-top-wrap">
                    <div class="join-journey-sct-grid-img-top" style="background: url('<?php echo THEME_URI; ?>/assets/images/jjs-grid-1.png');">
                      <div class="jjsg-media-icon">
                        <img src="<?php echo THEME_URI; ?>/assets/images/jjs-grid-media.png">
                      </div>
                    </div>
                  </div>
                  <div class="jjsg-des-top-wrap">
                    <div class="jjsg-des-top">
                      <div class="jjsg-des">
                        <h3>For NGOS</h3>
                        <p>AI allows our bot to provides non-bias and reliable<br> feedback regarding career development and<br> challenges.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="join-journey-sct-grid-inner clearfix">
                  <div class="join-journey-sct-grid-img-bottom-wrap">
                    <div class="join-journey-sct-grid-img-bottom" style="background: url('<?php echo THEME_URI; ?>/assets/images/jjs-grid-2.png');">
                      <div class="jjsg-media-icon">
                        <img src="<?php echo THEME_URI; ?>/assets/images/wwd-campaigns-grid-1.png">
                      </div>
                    </div>
                  </div>
                  <div class="jjsg-des-bottom-wrap">
                    <div class="jjsg-des-bottom">
                      <div class="jjsg-des">
                        <h3>For Businesses</h3>
                        <p>AI allows us to aggregate your data into a career path<br> and connect you with the right resources to make it<br> happen.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="wwd-user-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wwd-user-sec-wrap">
          <div class="wwd-user-sec-inner">
            <div class="wwd-user-sec-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/wwd-user-sec-img.png');">
              
            </div>
            <div class="wwd-user-sec-rgt">
              <div class="wwd-user-sec-rgt-inner">
                <div class="wwd-user-sec-rgt-des">
                  <h3>For Users</h3>
                  <p>Access certified courses and <br> publications related to your field</p>
                  <a href="#">SUPPORT A CAMPAIGN <i><img src="<?php echo THEME_URI; ?>/assets/images/wwd-right.png"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="wwd-campaigns-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wwd-campaigns-sec-inner">
          <div class="wwd-campaigns-title">
            <h3>Ready to make Campaigns <br> work for you?</h3>
          </div>
          <div class="wwd-campaigns-grid-item">
            <ul class="ulc clearfix">
              <li>
                <div class="wwd-campaigns-grid-item-wrap">
                  <div class="wwd-campaigns-grid-item-icon">
                    <img src="<?php echo THEME_URI; ?>/assets/images/wwd-campaigns-grid-3.png">
                  </div>
                  <div class="wwd-campaigns-grid-item-des">
                    <h6>I’m NGO</h6>
                    <p>Because we believe in your <br> values and goals we want <br> to help you be supported!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="wwd-campaigns-grid-item-wrap">
                  <div class="wwd-campaigns-grid-item-icon">
                    <img src="<?php echo THEME_URI; ?>/assets/images/wwd-campaigns-grid-1.png">
                  </div>
                  <div class="wwd-campaigns-grid-item-des">
                    <h6>I’m Company</h6>
                    <p>By improving societies’ <br> conditions you improve also <br> your market</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="wwd-campaigns-grid-item-wrap">
                  <div class="wwd-campaigns-grid-item-icon">
                    <img src="<?php echo THEME_URI; ?>/assets/images/wwd-campaigns-grid-2.png">
                  </div>
                  <div class="wwd-campaigns-grid-item-des">
                    <h6>I’m Supporter</h6>
                    <p>Social Asset’s power <br> Lorem ipsum dolor sit amet, <br> consectetur.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>