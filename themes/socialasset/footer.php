<?php 
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $continfo = get_field('contactinfo', 'options');
  $adres =  $continfo['address'];
  $gmapsurl = $continfo['google_maps'];
  $e_mailadres = $continfo['emailaddress'];
  $show_telefoon = $continfo['telephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $smedias = get_field('socialmedia', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-main">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="ftr-col-1">
            <?php _e('<h5>Get in Touch</h5>', THEME_NAME);?>
            <ul class="ulc">
              <?php if( !empty( $adres ) ) printf('<li><a href="%s">%s</a></li>', $gmaplink, $adres);  ?>
              <?php if( !empty( $show_telefoon ) ) printf('<li><a href="tel:%s">T. &nbsp; %s</a></li>', $telefoon, $show_telefoon);  ?>
              <?php if( !empty( $e_mailadres ) ) printf('<li><a href="mailto:%s">E. %s</a></li>', $e_mailadres, $e_mailadres);  ?>
            </ul> 
            <div class="ftr-social">
              <?php 
                if(!empty($smedias)): 
                foreach($smedias as $smedia): 
              ?>
                <a target="_blank" href="<?php echo $smedia['url']; ?>">
                  <?php echo $smedia['icon']; ?>
                </a>
              <?php 
                endforeach; 
                endif; 
              ?>
            </div>        
          </div>
        </div>
        <div class="col-md-6 col-sm-12 clearfix">
          <div class="ftr-col-2">
            <h5>Subscribe to our Newsletter</h5>
            <p>By subscribing here, you will receive our newsletters. You can unsubscribe at any time by following the link at the bottom of each newsletter.</p>
            <div class="nl-from-wrp">
              <form action="">
                <input type="email" placeholder="Type your email here">
                <button><i class="fas fa-long-arrow-alt-right"></i></button>
              </form>
            </div>
            <?php 
              $ftmenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'ulc clearfix',
                  'container' => 'copynav',
                  'container_class' => 'copynav'
                );
              wp_nav_menu( $ftmenuOptions ); 
            ?>
          </div>
        </div>
      </div>
    </div>   
  </div>
  <div class="ftr-btm">
    <div class="container-lg">
      <div class="row">
        <div class="col-6">
          <div class="ftr-btm-lft">
            <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>  
          </div>
        </div>
        <div class="col-6">
          <div class="ftr-btm-rgt">
            <a href="#">
              <span class="creation-with-txt">Creation with <i class="fas fa-heart"></i> by </span>
              <img src="<?php echo THEME_URI; ?>/assets/images/wf-logo-black.png">
            </a>
          </div>
        </div>
      </div>
    </div>   
  </div>  
</footer>
<?php if( !is_user_logged_in() ): ?>
<div class="modal fade vn-modal-con-wrap" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-content">
          <div class="modal-login-form">
            <div class="login-form">
                <span id="mloginerror" class="login-error"></span>
                <span id="msuccess-login" class="success-login"></span>
                <form id="modal-login" onsubmit="SubmitModalFormData(); return false">
                  <input type="hidden" name="action" value="user_modal_login_account">
                  <div class="fl-input-field-row sa-input">
                    <label>Email *</label>
                    <input type="email" name="memail" id="mloginuser" placeholder="Your Email">
                    <span class="loginemail_error error-msg"></span>
                  </div>
                  <div class="fl-input-field-row sa-input">
                    <label>Password *</label>
                    <input type="password" name="mpassword" id="mloginpassword" placeholder="Password">
                    <span class="loginpass_error error-msg"></span>
                  </div>
                  <div class="fl-submit-btn w-full forgot-pass-field-before">
                    <input type="hidden" name="user_modal_login_nonce" value="<?php echo wp_create_nonce('user-modal-login-nonce'); ?>"/>
                    <input type="submit" value="Sign In">
                  </div>
                </form>
                <div class="fl-or-text">
                  <span>Or</span>
                </div>
                <div class="fl-sign-in-another">
                  <a class="gogle-login-btn" href="#">
                    <i class="fab fa-google"></i>
                    Sign In with Google
                  </a>
                  <a class="facebook-login-btn" href="#">
                    <i class="fab fa-facebook-square"></i>
                    Sign In with LinkedIn
                  </a>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
<script>
    jQuery(function(){
        var sampleTags = ["<?php echo get_campaign_tags();?>"];
        // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
        // examples, so it automatically defaults to singleField.
        jQuery('#singleFieldTags2').tagit({
            availableTags: sampleTags
        });
    });
</script>
</body>
</html>
