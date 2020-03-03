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
<section class="hm-banner-slider-sec">
  <div class="hm-banner-slider">
    <div class="hm-banner-slider-item hm-banner-design-1" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-item02.jpg')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr clearfix">
              <div class="hm-banner-slider-item-lft-bg hide-sm" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-design-1-lft-bg.png')"></div>
              <div class="hm-banner-slider-item-rgt-des text-white">
                <span class="actionaid-tag">Actionaid</span>
                <h4>Clean South Crete</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus libero. Vestibulum ante ipsum primis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#">VIEW CAMPAIGN</a>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div class="hm-banner-slider-item hm-banner-design-2" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-item01.jpg')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr">
              <span class="sr-only-txt"></span>
              <h2>The Interface between  <br><span class="bus">Business</span> and <span class="soc">Social</span> Problems</h2>
              <a href="#">CREATE ACCOUNT</a>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div class="hm-banner-slider-item hm-banner-design-1" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-item02.jpg')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr clearfix">
              <div class="hm-banner-slider-item-lft-bg hide-sm" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-design-1-lft-bg.png')">
              </div>
              <div class="hm-banner-slider-item-rgt-des text-white">
                <span class="actionaid-tag">Actionaid</span>
                <h4>Clean South Crete</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus libero. Vestibulum ante ipsum primis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#">VIEW CAMPAIGN</a>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div class="hm-banner-slider-item hm-banner-design-2" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-item01.jpg')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr">
              <span class="sr-only-txt"></span>
              <h2>The Interface between <span class="bus">Business</span> and <span class="soc">Social</span> Problems</h2>
              <a href="#">CREATE ACCOUNT</a>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
  <a href="#hm-wc-social-assets-sec" class="hm-bnr-scroll"><img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-scroll.png" alt=""></a>  
</section>


<section class="hm-wc-social-assets-sec" id="hm-wc-social-assets-sec">
  <div class="hm-wc-social-assets-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hm-wc-social-assets-top-innr text-center">
            <h1>Welcome to Social Asset</h1>
            <p><strong>“Social Asset is the interface between business and social problems”</strong></p>
            <p>Our Platform achieves the link between the needs of society, inparticular, the needs of local government, NGOs and social enterprises, with businesses that meet these needs as CSR (Corporate Social Responsibility) actions.</p>
            <a href="#">MORE ABOUT US</a>
          </div>
        </div>
      </div>
    </div>
    <span class="hm-wc-social-assets-top-shape"></span>      
  </div>  
</section>


<section class="join-journey-section hm-join-journey-sec">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="join-journey-section-inner">
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
                        <a href="#">CREATE CAMPAIGN</a>
                      </div>
                      <span><img src="<?php echo THEME_URI; ?>/assets/images/hm-join-journey-1.png" alt=""></span>
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
                        <a href="#">MORE INFO</a>
                      </div>
                      <span><img src="<?php echo THEME_URI; ?>/assets/images/hm-join-journey-2.png" alt=""></span>
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


<section class="hm-user-support-sec">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-user-support-inner" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-user-support-bg.jpg');">
          <div class="hm-user-support-rgt-des hide-md">
            <h3>For Users</h3>
            <p>Access certified courses and <br> publications related to your field</p>
            <a href="#">SUPPORT A CAMPAIGN</a>
          </div>
        </div>
        <div class="hm-user-support-rgt-des show-md">
          <h3>For Users</h3>
          <p>Access certified courses and <br> publications related to your field</p>
          <a href="#">SUPPORT A CAMPAIGN</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="upcoming-campaigns-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="upcoming-campaigns-head text-center">
          <h4>Upcoming Campaigns</h4>
          <p>Learn everything about our goal through our projects.</p>
        </div>
        <div class="upcoming-campaigns-main">
          <div class="user-campaign-list-cntlr">
            <ul class=" ulc masonry">
              <li class="campaigns-list-item-wrp campaigns-list-item-50">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp no-image">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Salamamina - Oil Spoil </h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Salamamina - Oil Spoil </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp only-des">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet</p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);">
                  </div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>


            </ul>
            <div class="show-more-btn">
              <a href="#">EXPLORE ALL CAMPAIGNS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <span class="hm-wc-social-assets-top-shape"></span> 
</section>


<section class="hm-explore-campaigns-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-explore-campaigns-innr text-center">
          <ul class="ulc clearfix">
            <li>
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/m-explore-campaigns-bg-1.png)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong>Environment <br>Campaigns</strong>
                    <span>12 opened</span>
                  </div>                  
                </div>
                <a class="overlay-link" href="#"></a>
              </div>
            </li>
            <li>
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/m-explore-campaigns-bg-2.png)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong>Animal Planet <br>Campaigns</strong>
                    <span>6 opened</span>
                  </div>
                </div>
                <a class="overlay-link" href="#"></a>
              </div>
            </li>
            <li>
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/m-explore-campaigns-bg-3.png)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong>Human <br>Campaigns</strong>
                    <span>32 opened</span>
                  </div>
                </div>
                <a class="overlay-link" href="#"></a>
              </div>
            </li>
            <li class="w-50">
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/m-explore-campaigns-bg-4.png)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong>Health <br>Campaigns</strong>
                    <span>12 opened</span>
                  </div>
                </div>
                <a class="overlay-link" href="#"></a>
              </div>
            </li>
            <li class="w-50">
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/m-explore-campaigns-bg-5.png)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong>Education <br>Campaigns</strong>
                    <span>No opened yet</span>
                  </div>
                </div>
                <a class="overlay-link" href="#"></a>
              </div>
            </li>
          </ul>
          <div class="hm-explore-campaigns-link">
            <a class="hm-explore-btn" href="#">EXPLORE ALL CAMPAIGNS</a>
            <br>
            <a class="hm-campaign-btn" href="#">START A CAMPAIGN</a>  
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="hm-testimonials-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-testimonials-innr">
          <div class="hm-testimonials-head text-center text-white">
            <h4>Testimonials</h4>
            <p>Here’re what our clients have to say about our services</p>
          </div>

          <div class="hm-testimonials-slider dft-slider-dot-con">
            <div class="hm-testimonials-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-avatar.png" alt=""></i>              
              <p><strong>MYMENTOR</strong> makes me feel confident about my Qualifications and my daly performance in my job. I suggest to all women who work in STEAM domain to try this product.</p>
              <div class="hm-testimonials-ftr">
                <span>Mary M.</span>
                <strong>Junior Developer</strong>                
              </div>
              <span class="top-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-top-q-icon.png" alt=""></span>
              <span class="btm-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-btm-q-icon.png" alt=""></span>
            </div>
            

            <div class="hm-testimonials-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-avatar.png" alt=""></i>              
              <p><strong>MYMENTOR</strong> makes me feel confident about my Qualifications and my daly performance in my job. I suggest to all women who work in STEAM domain to try this product.</p>
              <div class="hm-testimonials-ftr">
                <span>Mary M.</span>
                <strong>Junior Developer</strong>                
              </div>
              <span class="top-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-top-q-icon.png" alt=""></span>
              <span class="btm-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-btm-q-icon.png" alt=""></span>
            </div>
            <div class="hm-testimonials-slider-item d-">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-avatar.png" alt=""></i>              
              <p><strong>MYMENTOR</strong> makes me feel confident about my Qualifications and my daly performance in my job. I suggest to all women who work in STEAM domain to try this product.</p>
              <div class="hm-testimonials-ftr">
                <span>Mary M.</span>
                <strong>Junior Developer</strong>                
              </div>
              <span class="top-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-top-q-icon.png" alt=""></span>
              <span class="btm-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-btm-q-icon.png" alt=""></span>
            </div>
          </div>
          <span class="hm-testimonials-icon"><img src="<?php echo THEME_URI; ?>/assets/images/hm-testimonials-icon.png" alt=""></span>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="hm-partner-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-partner-innr">
          <div class="hm-partner-head text-center">
            <h4>Companies that use Social Assets</h4>
          </div>

          <div class="hm-partner-slider clearfix dft-slider-dot-con">
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-1.png" alt=""></i>
            </div>
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-2.png" alt=""></i>
            </div>
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-3.png" alt=""></i>
            </div>
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-4.png" alt=""></i>
            </div>
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-1.png" alt=""></i>
            </div>
            <div class="hm-partner-slider-item">
              <i><img src="<?php echo THEME_URI; ?>/assets/images/partner-3.png" alt=""></i>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="hm-blog-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-12">
        <div class="hm-blog-innr">
          <div class="hm-blog-head text-center">
            <h4>Our Blog</h4>
            <p>Learn everything about our goal through our projects.</p>
          </div>
          <div class="hm-blog-grid-wrp clearfix">
            <div class="hm-blog-grid-item">
              <div class="hm-blog-grid-item-innr">
                <div class="hm-blog-grid-bg">
                  <div class="hm-blog-grid-bg-main" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-blog1.png');"></div>
                </div>
                <div class="hm-blog-grid-des mHc">
                  <h6>Writing in the Sciences</h6>
                  <p>This course teaches scientists to become more effective writer. Topics include: principles of good writing,  the format of a scientific manuscript, ethical issues in scientific publications.</p>
                </div>
                <a href="#" class="overlay-link"></a>              
              </div>  
            </div>
            <div class="hm-blog-grid-item">
              <div class="hm-blog-grid-item-innr">
                <div class="hm-blog-grid-bg">
                  <div class="hm-blog-grid-bg-main" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-blog2.png');"></div>
                </div>
                <div class="hm-blog-grid-des mHc">
                  <h6>Introduction to Translational Science</h6>
                  <p>Translational science seeks to speed up the process of moving research discoveries from the laboratory into healthcare practices.</p>
                </div>
                <a href="#" class="overlay-link"></a>              
              </div>  
            </div>
            <div class="hm-blog-grid-item">
              <div class="hm-blog-grid-item-innr">
                <div class="hm-blog-grid-bg">
                  <div class="hm-blog-grid-bg-main" style="background: url('<?php echo THEME_URI; ?>/assets/images/hm-blog3.png');"></div>
                </div>
                <div class="hm-blog-grid-des mHc">
                  <h6>Open Source tools for Data Science</h6>
                  <p>In this course, you’ll learn about Jupyter Notebooks, RStudio IDE, Apache Zeppelin and Data Science Experience.</p>
                </div>
                <a href="#" class="overlay-link"></a>              
              </div>  
            </div>
          </div>
          <div class="hm-blog-load-more text-center">
            <a href="#">VIEW ALL ARTICLES</a>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>