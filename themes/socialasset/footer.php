<footer class="footer-wrp">
  <div class="ftr-main">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="ftr-col-1">
            <h5>Get in Touch</h5>
            <ul class="ulc">
              <li>
                <a href="#">30 Arch. Kyprianos Str. <br>3036 Limassol</a>
              </li>
              <li>
                <a href="#">T. &nbsp; 2500 2500</a>
              </li>
              <li>
                <a href="#">E. info@mymentor.com</a>
              </li>
            </ul> 
            <div class="ftr-social">
              <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
            <ul class="ulc clearfix">
              <li><a href="#">PRIVACY POLICY</a></li>
              <li><a href="#">TERMS OF USE</a></li>
              <li><a href="#">COOKIES POLICY</a></li>
            </ul>
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
            <span>COPYRIGHT ©2019 </span>
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
<script src="<?php echo THEME_URI; ?>/assets/js/packery.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/tag.suggest/js/tag-it.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/account.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>

<script type='text/javascript' src='http://localhost/2020/02/socialasset/wp-includes/js/tinymce/tinymce.min.js?ver=4960-20190918'></script>
<script src="http://localhost/2020/02/socialasset/wp-admin/js/editor.min.js?ver=5.3.2"></script>
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
