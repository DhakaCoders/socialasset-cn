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
              $id = $wp_query->get( 'id' );
              if( isset($action) && !empty($action) ){
                if( $action == 'mycampaigns'){
                  include('ngo-campaigns.php');
                }elseif($action == 'add-campaign'){
                  include('ngo-new-campaign.php');
                }elseif( $action == 'edit-campaign' && !empty($id)){
                  include('ngo-edit-campaign.php');
                }elseif($action == 'edit-campaign'){
                  include('ngo-profile.php');
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