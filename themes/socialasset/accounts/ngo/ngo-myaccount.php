<?php
global $msg, $wp_query;
defined( 'ABSPATH' ) || exit; 
include('header.php'); 
?>
<a href="<?php get_ao_custom_logout('account'); ?>">Log out</a>
<div class="gray-bg">
  <section class="ngo-profile-sec">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ngo-profile-sec-iner width-1115">
              <?php 
              include('menu.php');
              $action = $wp_query->get( 'action' );
              $string = $wp_query->get( 'string' );
              if( isset($action) && !empty($action) && isset($string) && !empty($string)) {
                  if($action == 'action' && $string == 'mycampaigns'){
                    include('ngo-campaigns.php');
                  }elseif( ($action == 'action' && $string == 'add-campaign')  ){
                    include('ngo-new-campaign.php');
                  }else{
                    include('ngo-profile.php');
                  }
              }elseif(isset($action) && !empty($action)){
                if($action == 'mycampaigns'){
                    include('ngo-campaigns.php');
                  }elseif( ($action == 'add-campaign')  ){
                    include('ngo-new-campaign.php');
                  }else{
                    include('ngo-profile.php');
                  }
              }else{
                include('ngo-profile.php');
              }
              ?>

            </div>
          </div>
        </div>
    </div>    
  </section>
</div>