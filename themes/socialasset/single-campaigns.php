<?php 
get_camp_header(); 
while( have_posts() ): the_post();
$thisID = get_the_ID();

$categories = get_the_terms( $thisID, 'campaign' );
$term_name = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
       $term_name = $category->name; 
    }
}
$authorID = get_the_author_meta('ID');
$sumetas = array_map( function( $a ){ return $a[0]; }, get_user_meta( $authorID ) );
$SupportLimit = get_post_meta( $thisID , 'target_supporters', true );
$totalSupport = get_post_meta( $thisID , '_supported_count', true );
$expire_date = get_field('capmpaign_to_date', $thisID);
$expire ='';
if( !empty($expire_date) ) $expire = $expire_date;
?>
<section class="miracle-plan-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php 
          if(
            isset($_GET['preview_id']) && 
            isset($_GET['preview']) && 
            ($_GET['preview'] = 'true') && 
            ( !empty($_GET['preview']) ) &&
            ( !empty($_GET['preview_id']) ) 
          ): 
        ?>
        <div><a class="backto-panel" href="<?php echo esc_url(home_url('myaccount/edit-campaign/'.$thisID));?>">BACK TO YOUR PANEL</a></div>
        <?php endif; ?>
        <div class="miracle-plan-innr clearfix">
          <div class="miracle-plan-slider-wrp">
            <div class="miraclePlanBigSlider">
      			<?php 
      			  $cam_galleries = get_field('campaign_gallery', $thisID);
      			  $gallery_src = '';
      			  if($cam_galleries && !empty($cam_galleries)){
      			    //var_dump($cam_galleries);
      			    foreach( $cam_galleries as $gallery_id ):

      			      if(isset($gallery_id['id']) && !empty($gallery_id['id'])){
      			        $g_id = $gallery_id['id'];
      			      }elseif(isset($gallery_id) && !empty($gallery_id)){
      			        $g_id = $gallery_id;
      			      }
      			    if( !empty($g_id) ){
      			      $gallery_src = cbv_get_image_src($g_id, 'full');
      			    }
      			?>
              <div class="miraclePlanBigSlider-item">
                <?php if(is_capm_video($g_id)): ?>
                  <video width="750" height="480" controls>
                    <source src="<?php echo get_camp_video_url( $g_id ); ?>" type="video/mp4">
                  </video>
                <?php else: ?>
                <div class="miraclePlanBigSlider-item-bg" style="background: url('<?php echo $gallery_src; ?>')">
                </div>
                <?php endif; ?>
              </div>
              <?php endforeach; ?>
          	<?php 
          		}else{ 
          		  $attach_id = get_post_thumbnail_id( $thisID );
		          $featured_src = '';
		          if( !empty($attach_id) ){
		            $featured_src = cbv_get_image_src($attach_id, 'full');
		          }
          	?>
          	<div class="miraclePlanBigSlider-item">
                <div class="miraclePlanBigSlider-item-bg" style="background: url('<?php echo $featured_src; ?>')">
                </div>
             </div>
          	<?php } ?>
            </div>
            <?php if($cam_galleries){ ?>
            <div class="miraclePlanthumbSlider clearfix">
              <?php
                $gallery_tag = ''; 
        				foreach( $cam_galleries as $gallery_id ):

        				if(isset($gallery_id['id']) && !empty($gallery_id['id'])){
        				$g_id = $gallery_id['id'];
        				}elseif(isset($gallery_id) && !empty($gallery_id)){
        				$g_id = $gallery_id;
        				}
      			    if( !empty($g_id) ){
      			      $gallery_tag = cbv_get_image_tag($g_id, 'thumbnail');
      			    }
              ?>
              <span class="miraclePlanthumbSlider-item">
                 <?php if(is_capm_video($g_id)): ?>
                  <video width="60" height="60" controls>
                    <source src="<?php echo get_camp_video_url( $g_id ); ?>" type="video/mp4">
                  </video>
                <?php else: ?>
                <?php echo $gallery_tag; ?>
                <?php endif; ?>
              </span>
              <?php endforeach; ?>
            </div>
        	<?php } ?>
          </div>
          <div class="miracle-plan-des-wrp">
            <div class="miracle-plan-des-innr">
              <?php if( !empty($term_name) ): ?>
              <span class="human-tag"><?php echo $term_name; ?></span>
          	  <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p>Traumatic events can create persistent mental and physical stress. We have 6 year of experience spreading a proven first aid technique: TTT. Help us Help more!</p>
              <div class="miracle-plan-progress-camp">
                <ul class="ulc clearfix">
                  <li>
                    <i>
                      <img src="<?php echo THEME_URI; ?>/assets/images/miracle-plan-des-icon-1.png" alt="">
                    </i>
                    <?php 
  	                  if( isset($sumetas['_profile_logo_id']) && !empty($sumetas['_profile_logo_id']) ){
  	                ?>
	                  <i><?php echo get_user_profile_logo_tag($sumetas['_profile_logo_id']);?></i> 
	                <?php } ?>              
                  </li>
                  <?php if( get_count_posts_by_author('campaigns', $authorID) ): ?>
                  <li>
                    <span><?php echo get_count_posts_by_author('campaigns', $authorID); ?> Active Campaigns</span>
                  </li>
                  <?php else: ?>
                  	<li>
                    <span>0 Active Campaigns</span>
                  </li>
                  <?php endif; ?>
                </ul> 
                <hr>
                <?php 
                  $percentange = camp_progress_bar($SupportLimit, $totalSupport);
                  $prog_value = 0;
                  if( $percentange ) $prog_value = $percentange;
                ?>
                <div class="miracle-plan-progress-bar-con">
                  <div class="miracle-plan-progress-top-des clearfix">
                    <span>Support</span>
                    <span><strong class="progress-par"><?php echo $prog_value; ?></strong>%</span>
                  </div>
                  <div class="miracle-plan-progress-main">
                    <span style="width: <?php echo $prog_value; ?>%"></span>
                  </div>
                  <div class="miracle-plan-progress-btm-des">
                    <?php 
                        if(!empty($expire)): 
                          if(date_remaining($expire)):
                      ?>
                    <span><?php echo date_remaining($expire);?></span>
                    <?php endif; endif; ?>
                  </div>
                  <div class="miracle-plan-progress-link-wrp">
                  	<?php 
      			        if( camp_expire_date($expire) ){
                  	?>
                    <span class="support-btn status-btn-expired"><i class="far fa-clock"></i>EXPIRED</span>
                	  <?php }else{ ?>
                		<?php 
                		$user = wp_get_current_user();
                      	if ( in_array( 'subscriber', (array) $user->roles ) && is_user_logged_in() ) {
                		?>
                		<a class="support-btn support-capm" href="#" onclick="UserAddSupport(<?php echo $thisID; ?>); return false;"><i class="far fa-heart"></i>SUPPORT THIS CAMPAIGN</a>
                		<?php }elseif(in_array( 'business', (array) $user->roles ) && is_user_logged_in()){ ?>
                			<a class="support-btn support-capm" href="#" onclick="UserAddSupport(<?php echo $thisID; ?>); return false;"><i class="far fa-heart"></i>SUPPORT THIS CAMPAIGN</a>
                		<?php }elseif( (in_array( 'administrator', (array) $user->roles ) || in_array( 'ngo', (array) $user->roles ) ) && is_user_logged_in()){ ?>

                		<?php }else{ ?>
                			<a onclick="alert('If you want to support please login before.');" class="support-btn" href="javascript:void()"><i class="far fa-heart"></i>SUPPORT THIS CAMPAIGN</a>
                		<?php } ?>
                	<?php } ?>
                    <span class="share-btn" >SHARE <a href="#"></a></span>
                  </div>  
                </div>
              </div>             
            </div>   
          </div>        
        </div>  
      </div>
    </div>
  </div>     
</section>


<section class="user-story-cmpaign-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="user-story-cmpaign-con">
          <h3>Story Campaign</h3>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>