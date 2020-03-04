<?php 
  get_camp_header();
?>
<?php
  $slide = get_field('slidesec', HOMEID);
  if( $slide ): 
    $slideitems = $slide['slide'];
    if( $slideitems ): 
?>
<section class="hm-banner-slider-sec">
  <div class="hm-banner-slider">
    <?php 
      $scampbg_src = $scampleft_src = $snorm_src = '';
      foreach( $slideitems as $item ): 
        $scapm = $item['slidecampaign'];
        $snorm = $item['slidenormal'];
    ?>
    <?php 
      if($item['slide_type'] == 'campaign'): 
        if( !empty($scapm['bgimage']) ) 
          $scampbg_src = cbv_get_image_src($scapm['bgimage'], 'slidebg');
        if( !empty($scapm['image']) ) 
          $scampleft_src = cbv_get_image_src($scapm['image'], 'slidecapm');
    ?>
    <div class="hm-banner-slider-item hm-banner-design-1" style="background: url('<?php echo $scampbg_src; ?>')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr clearfix">
              <div class="hm-banner-slider-item-lft-bg hide-sm" style="background: url('<?php echo $scampleft_src; ?>')"></div>
              <div class="hm-banner-slider-item-rgt-des text-white">
              <?php 
                if( !empty($scapm['subtitle']) ) printf('<span class="actionaid-tag">%s</span>',$scapm['subtitle']);
                if( !empty($scapm['title']) ) printf('<h4>%s</h4>',$scapm['title']);
              ?>
              <?php 
                if( !empty($scapm['content']) ) echo wpautop( $scapm['content'] );

                $link = $scapm['link'];
                if( is_array( $link ) &&  !empty( $link['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link['url'], $link['target'], $link['title']); 
                }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <?php 
      else: 

      if( !empty($snorm['bgimage']) ) 
          $snorm_src = cbv_get_image_src($snorm['bgimage'], 'slidebg');
    ?>
    <div class="hm-banner-slider-item hm-banner-design-2" style="background: url('<?php echo $snorm_src; ?>')">
      <span class="hm-banner-slider-rb-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-banner-slider-rb-icon.png" alt="">
      </span>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hm-banner-slider-item-innr">
              <span class="sr-only-txt"></span>
              <?php 
                if( !empty($snorm['content']) ) printf('<h2>%s</h2>', $snorm['content']);
                $link = $snorm['link'];
                if( is_array( $link ) &&  !empty( $link['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link['url'], $link['target'], $link['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <a href="#hm-wc-social-assets-sec" class="hm-bnr-scroll"><img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-scroll.png" alt=""></a>  
</section>
<?php endif; endif; ?>
<?php
  $sassets = get_field('socialasset', HOMEID);
  $ngop_src = $bussp_src = $ngo_icon = $buss_icon = '';
  if( !empty($sassets['ngo_image']) ) 
    $ngop_src = cbv_get_image_src($sassets['ngo_image'], 'grid1');
  if( !empty($sassets['ngo_icon']) ) 
    $ngo_icon = cbv_get_image_tag($sassets['ngo_icon']);

  if( !empty($sassets['buss_image']) ) 
  $bussp_src = cbv_get_image_src($sassets['buss_image'], 'grid1');

  if( !empty($sassets['busicon']) ) 
    $buss_icon = cbv_get_image_tag($sassets['busicon']);
?>
<section class="hm-wc-social-assets-sec" id="hm-wc-social-assets-sec">
  <div class="hm-wc-social-assets-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hm-wc-social-assets-top-innr text-center">
            <?php if( !empty($sassets['title']) ) printf('<h1>%s</h1>', $sassets['title']); ?>
            <?php 
            if( !empty($sassets['content']) ) echo wpautop( $sassets['content'] ); 
            $link3 = $sassets['link'];
            if( is_array( $link3 ) &&  !empty( $link3['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $link3['url'], $link3['target'], $link3['title']); 
            }
            ?>
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
                    <div class="join-journey-sct-grid-img-top" style="background: url('<?php echo $ngop_src; ?>');">
                      <div class="jjsg-media-icon">
                        <?php echo $ngo_icon; ?>
                      </div>
                    </div>
                  </div>
                  <div class="jjsg-des-top-wrap">
                    <div class="jjsg-des-top">
                      <div class="jjsg-des">
                        <?php if( !empty($sassets['ngo_title']) ) printf('<h3>%s</h3>', $sassets['ngo_title']); ?>
                        <?php 
                        if( !empty($sassets['ngo_content']) ) echo wpautop( $sassets['ngo_content'] ); 
                        $link4 = $sassets['ngo_link'];
                        if( is_array( $link4 ) &&  !empty( $link4['url'] ) ){
                          printf('<a href="%s" target="%s">%s</a>', $link4['url'], $link4['target'], $link4['title']); 
                        }
                        ?>
                      </div>
                      <span><img src="<?php echo THEME_URI; ?>/assets/images/hm-join-journey-1.png" alt=""></span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="join-journey-sct-grid-inner clearfix">
                  <div class="join-journey-sct-grid-img-bottom-wrap">
                    <div class="join-journey-sct-grid-img-bottom" style="background: url('<?php echo $bussp_src; ?>');">
                      <div class="jjsg-media-icon">
                        <?php echo $buss_icon; ?>
                      </div>
                    </div>
                  </div>
                  <div class="jjsg-des-bottom-wrap">
                    <div class="jjsg-des-bottom">
                      <div class="jjsg-des">
                        <?php if( !empty($sassets['buss_title']) ) printf('<h3>%s</h3>', $sassets['buss_title']); ?>
                        <?php 
                        if( !empty($sassets['buss_content']) ) echo wpautop( $sassets['buss_content'] ); 
                        $link5 = $sassets['busslink'];
                        if( is_array( $link5 ) &&  !empty( $link5['url'] ) ){
                          printf('<a href="%s" target="%s">%s</a>', $link5['url'], $link5['target'], $link5['title']); 
                        }
                        ?>
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

<?php 
  if( !empty($sassets['user_image']) ) 
  $userp_src = cbv_get_image_src($sassets['user_image'], 'grid2');
?>
<section class="hm-user-support-sec">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-user-support-inner" style="background: url('<?php echo $userp_src; ?>');">
          <div class="hm-user-support-rgt-des hide-md">
            <?php if( !empty($sassets['user_title']) ) printf('<h3>%s</h3>', $sassets['user_title']); ?>
            <?php if( !empty($sassets['user_content']) ) echo wpautop( $sassets['user_content'] );

              $link6 = $sassets['userlink'];
              if( is_array( $link6 ) &&  !empty( $link6['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $link6['url'], $link6['target'], $link6['title']); 
              }
            ?>
          </div>
        </div>
        <div class="hm-user-support-rgt-des show-md">
          <?php if( !empty($sassets['user_title']) ) printf('<h3>%s</h3>', $sassets['user_title']); ?>
          <?php if( !empty($sassets['user_content']) ) echo wpautop( $sassets['user_content'] );

            $link6 = $sassets['userlink'];
            if( is_array( $link6 ) &&  !empty( $link6['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $link6['url'], $link6['target'], $link6['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
  $upcamp = get_field('upcampaigns', HOMEID);
?>
<section class="upcoming-campaigns-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="upcoming-campaigns-head text-center">
          <?php 
            if( !empty($upcamp['title']) ) printf('<h4>%s</h4>', $upcamp['title']); 
            if( !empty($upcamp['content']) ) echo wpautop( $upcamp['content'] );
          ?>
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

<?php 
$htermsg = get_field('ccategory', HOMEID);
$hterms = $htermsg['cselect'];
if ( ! empty( $hterms ) && ! is_wp_error( $hterms ) ):
?>
<section class="hm-explore-campaigns-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-explore-campaigns-innr text-center">
          <ul class="ulc clearfix">
            <?php 
                foreach ( $hterms as $hterm ) { 
                $thumbnail_id = get_field( 'image', $hterm, false );
                if( !empty($thumbnail_id) ){
                    $term_image = cbv_get_image_src($thumbnail_id);
                }
                else{
                   $term_image = THEME_URI .'/assets/images/campcat.png';
                }
            ?>
            <li>
              <div class="hm-explore-campaigns-con">
                <div class="hm-explore-campaigns-con-bg" style="background: url(<?php echo $term_image; ?>)"></div>
                <div class="hm-explore-campaigns-des-wrp">
                  <div class="hm-explore-campaigns-des">
                    <strong><?php echo $hterm->name; ?> <br>Campaigns</strong>
                    <span>12 opened</span>
                  </div>                  
                </div>
                <a class="overlay-link" href="<?php echo esc_url( get_term_link($hterm) );?>"></a>
              </div>
            </li>
            <?php } ?>
          </ul>
          <div class="hm-explore-campaigns-link">
            <a class="hm-explore-btn" href="<?php echo home_url( 'campaigns' ); ?>">EXPLORE ALL CAMPAIGNS</a>
            <br>
            <a class="hm-campaign-btn" href="#">START A CAMPAIGN</a>  
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php 
  $testmls = get_field('testimonials', HOMEID);
  $quotes = $testmls['quote'];
?>

<section class="hm-testimonials-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-testimonials-innr">
          <div class="hm-testimonials-head text-center text-white">
          <?php 
            if( !empty($testmls['title']) ) printf('<h4>%s</h4>',$testmls['title']); 
            if( !empty($testmls['content']) ) echo wpautop( $testmls['content'] );
          ?>
          </div>
          <?php if( !empty($quotes) ): ?>
          <div class="hm-testimonials-slider dft-slider-dot-con">
            <?php 
              foreach( $quotes as $quote ): 
                $quote_tag = '';
                if( !empty($quote['image']) ) 
                  $quote_tag = cbv_get_image_tag($quote['image']);
            ?>
            <div class="hm-testimonials-slider-item">
              <i><?php echo $quote_tag; ?></i>              
              <?php if( !empty($quote['content']) ) echo wpautop( $quote['content'] ); ?>
              <div class="hm-testimonials-ftr">
                <?php 
                  if( !empty($quote['name']) ) printf('<span>%s</span>',$quote['name']);
                  if( !empty($quote['designation']) ) printf('<strong>%s</strong>',$quote['designation']);
                ?>              
              </div>
              <span class="top-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-top-q-icon.png" alt=""></span>
              <span class="btm-q-icon"><img src="<?php echo THEME_URI; ?>/assets/images/testimonials-btm-q-icon.png" alt=""></span>
            </div>
            <?php endforeach; ?>
          </div>
          <span class="hm-testimonials-icon"><img src="<?php echo THEME_URI; ?>/assets/images/hm-testimonials-icon.png" alt=""></span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
  $csassets = get_field('csocialassets', HOMEID);
  $clogos = $csassets['clogo'];
?>
<section class="hm-partner-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hm-partner-innr">
          <div class="hm-partner-head text-center">
            <?php if( !empty($csassets['title']) ) printf('<h4>%s</h4>',$csassets['title']); ?>
          </div>
          <?php if( $clogos ): ?>
          <div class="hm-partner-slider clearfix dft-slider-dot-con">
            <?php 
              $clogo_tag = '';
              foreach( $clogos as $clogo ): 
                if( !empty($clogo['logo']) ) 
                  $clogo_tag = cbv_get_image_tag($clogo['logo']);
            ?>
            <div class="hm-partner-slider-item">
              <i><?php echo $clogo_tag; ?></i>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
$blog = get_field('blog', HOMEID);

$blg_query = new WP_Query(array( 
    'post_type'=> 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order'=> 'desc'
  ) 
);
?>   
<section class="hm-blog-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-12">
        <div class="hm-blog-innr">
          <div class="hm-blog-head text-center">
            <?php 
              if( !empty($blog['title']) ) printf('<h4>%s</h4>', $blog['title']); 
              if( !empty($blog['content']) ) echo wpautop( $blog['content'] );
            ?>
          </div>
          <?php if($blg_query->have_posts()): ?>
          <div class="hm-blog-grid-wrp clearfix">
            <?php 
              $blog_src = '';
              while($blg_query->have_posts()): $blg_query->the_post();
                
                $attach_id = get_post_thumbnail_id(get_the_ID());
                if( !empty($attach_id) )
                  $blog_src = cbv_get_image_tag($attach_id,'bloggrid');
                else
                  $blog_src = THEME_URI .'/assets/images/blogdef.png';
            ?>
            <div class="hm-blog-grid-item">
              <div class="hm-blog-grid-item-innr">
                <div class="hm-blog-grid-bg">
                  <div class="hm-blog-grid-bg-main" style="background: url('<?php echo $blog_src; ?>');"></div>
                </div>
                <div class="hm-blog-grid-des mHc">
                  <h6><?php the_title();?></h6>
                  <?php the_excerpt();?>
                </div>
                <a href="<?php the_permalink();?>" class="overlay-link"></a>              
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
          <div class="hm-blog-load-more text-center">
            <a href="#">VIEW ALL ARTICLES</a>
          </div>
          <?php 
            endif;  
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>