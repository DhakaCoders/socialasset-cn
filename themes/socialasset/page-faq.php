<?php 
/*
  Template Name: FAQ
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
<div class="faq-page-sec-cntlr">
  <div class="container-xs">
    <div class="row">
      <div class="col-sm-12">
        <div class="faq-page-entry-hdr">
          <h1>Social Asset Story</h1>
          <ul class="clearfix ulc">
            <li class="faq-tab-active"><a href="#">FOR <strong> SUPPORTERS</strong></a></li>
            <li><a href="#">FOR <strong> NGOS</strong></a></li>
          </ul>
          <h6>Frequent Asked Question for Supporters</h6>
        </div>
      </div>
      
      <div class="col-sm-12">
        <div class="faq-des-wrap">
          <div class="hh-accordion-tab-row">
            <h6 class="hh-accordion-title">About Account security, How do I change my password?</h6>
            <div class="hh-accordion-des">
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitae elit non libero feugiat blandit at sed lacus. Quisque dignissim vestibulum dignissim. Duis id ante sit amet nibh fringilla blandit ut a libero. Proin id consectetur turpis. Nunc fringilla, sem a eleifend rutrum, nulla nisl laoreet arcu, eu varius leo ante sed turpis. Aenean sed arcu sem.
                  </p>
                  <div class="video-play">
                    <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
                      <img alt="" src="<?php echo THEME_URI; ?>/assets/images/fancy-full-img.png">
                    </a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="hh-accordion-tab-row">
            <h6 class="hh-accordion-title">About Account security, How do I change my password?</h6>
            <div class="hh-accordion-des">
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitae elit non libero feugiat blandit at sed lacus. Quisque dignissim vestibulum dignissim. Duis id ante sit amet nibh fringilla blandit ut a libero. Proin id consectetur turpis. Nunc fringilla, sem a eleifend rutrum, nulla nisl laoreet arcu, eu varius leo ante sed turpis. Aenean sed arcu sem.
                  </p>
                  <div class="video-play">
                    <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
                      <img alt="" src="<?php echo THEME_URI; ?>/assets/images/fancy-full-img.png">
                    </a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="hh-accordion-tab-row">
            <h6 class="hh-accordion-title">About Account security, How do I change my password?</h6>
            <div class="hh-accordion-des">
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitae elit non libero feugiat blandit at sed lacus. Quisque dignissim vestibulum dignissim. Duis id ante sit amet nibh fringilla blandit ut a libero. Proin id consectetur turpis. Nunc fringilla, sem a eleifend rutrum, nulla nisl laoreet arcu, eu varius leo ante sed turpis. Aenean sed arcu sem.
                  </p>
                  <div class="video-play">
                    <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
                      <img alt="" src="<?php echo THEME_URI; ?>/assets/images/fancy-full-img.png">
                    </a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="hh-accordion-tab-row">
            <h6 class="hh-accordion-title">About Account security, How do I change my password?</h6>
            <div class="hh-accordion-des">
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitae elit non libero feugiat blandit at sed lacus. Quisque dignissim vestibulum dignissim. Duis id ante sit amet nibh fringilla blandit ut a libero. Proin id consectetur turpis. Nunc fringilla, sem a eleifend rutrum, nulla nisl laoreet arcu, eu varius leo ante sed turpis. Aenean sed arcu sem.
                  </p>
                  <div class="video-play">
                    <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
                      <img alt="" src="<?php echo THEME_URI; ?>/assets/images/fancy-full-img.png">
                    </a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="hh-accordion-tab-row">
            <h6 class="hh-accordion-title">About Account security, How do I change my password?</h6>
            <div class="hh-accordion-des">
              <div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitae elit non libero feugiat blandit at sed lacus. Quisque dignissim vestibulum dignissim. Duis id ante sit amet nibh fringilla blandit ut a libero. Proin id consectetur turpis. Nunc fringilla, sem a eleifend rutrum, nulla nisl laoreet arcu, eu varius leo ante sed turpis. Aenean sed arcu sem.
                  </p>
                  <div class="video-play">
                    <a data-fancybox href="https://youtu.be/_Nua3Cjdik0">
                      <img alt="" src="<?php echo THEME_URI; ?>/assets/images/fancy-full-img.png">
                    </a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus aliquet neque, non euismod metus egestas molestie. Pellentesque sodales blandit lectus sit amet auctor. Etiam non erat sem. Donec vitaLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>