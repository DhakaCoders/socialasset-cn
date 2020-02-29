<?php 
$active_camp = 0;
if(isset($umetas['_support_camp_ids']) && !empty($umetas['_support_camp_ids'])):
$support_ids = $umetas['_support_camp_ids'];
$array_support_ids = explode(',', $support_ids);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$Query = new WP_Query(array( 
    'post_type'=> 'campaigns',
    'post_status' => array('publish', 'draft', 'pending'),
    'posts_per_page' => 10,
    'paged' => $paged,
    'order'=> 'DESC',
    'post__in' => $array_support_ids
  ) 
);

?>
<?php if( $Query->have_posts() ): ?>
<div id="tab-2" class="">
  <div class="tab-con-inr">
    <div class="user-profile-1-hdr clearfix">
      <strong>Contributions</strong>
      <span><?php echo $Query->found_posts; ?> Contributions</span>
    </div>
    <div class="dfp-tbl-wrap">
      <div class="table-dsc">
        <table>
          <thead>
            <tr>
              <th><span>Date </span></th>
              <th><span> Category</span></th>
              <th id="itemSort"><span>Campaign</span></th>
              <th><span>Status</span></th>
              <th><span>NGO</span></th>
            </tr>
          </thead>
          <tbody class="mixContainer">
            <?php 
            $i = 1;
            while($Query->have_posts()): $Query->the_post(); 
            $attach_id = get_post_thumbnail_id(get_the_ID());
            if( !empty($attach_id) ){
              $feaimg_tag = cbv_get_image_tag($attach_id, 'campthumb');
            }else{
              $feaimg_tag = '<img src="'.THEME_URI.'/assets/images/dfcamp.png" alt="'.get_the_title().'">';
            }

            $categories = get_the_terms( get_the_ID(), 'campaign' );
            $term_name = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                   $term_name = $category->name; 
                }
            }
            $camp_data = get_edit_campaign_post_data(get_the_ID());
            $expire_date = get_field('capmpaign_to_date', get_the_ID());
            $expire ='';
            if( !empty($expire_date) ) $expire = $expire_date;

            $authorID = get_the_author_meta('ID');
            $sumetas = array_map( function( $a ){ return $a[0]; }, get_user_meta( $authorID ) );

          ?>
            <tr class="mix" data-price="90" data-title="B" data-place="K">
              <td>
                <div class="tbl-td">
                  <strong>Date</strong>
                  <span class="tbl-date"><?php echo get_the_date('m/d/Y'); ?></span>
                </div>
              </td>
              <td>
                <div class="tbl-td">
                  <strong>Category</strong>
                  <?php if( !empty($term_name) ): ?>
                  <span class="tbl-cat-name"><?php echo $term_name; ?></span>
                  <?php endif; ?>
                </div>
              </td>
              <td>
                <div class="tbl-td">
                  <strong>Campaign</strong>
                  <div class="tbl-campaign-des">
                    <div class="tbl-campaign-img">
                      <?php echo $feaimg_tag; ?>
                    </div>
                    <div class="tbl-campaign-des-inr">
                      <strong><?php the_title(); ?></strong>
                      <?php echo wpautop( camp_excerpt(), true ); ?>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="tbl-td">
                  <strong>Status</strong>
                  <?php
                    if( camp_expire_date($expire) ){
                      echo '<span class="status-btn status-btn-expired">EXPIRED</span>';
                    }elseif($camp_data->post_status == 'publish'){
                      echo '<span class="status-btn status-btn-active">ACTIVE</span>';
                      $active_camp += $i;
                    }elseif($camp_data->post_status == 'pending'){
                      echo '<span class="status-btn status-btn-pending">PENDING</span>';
                    }else{
                      echo '<span class="status-btn status-btn-inactive">DRAFT</span>';
                    }
                  ?>
                </div>
              </td>
              <td>
                <div class="tbl-td">
                  <strong>NGO</strong>
                  <div class="ngo-logo">
                    <?php 
                      if( isset($sumetas['_profile_logo_id']) && !empty($sumetas['_profile_logo_id']) ){
                        echo get_user_profile_logo_tag($sumetas['_profile_logo_id']);
                     } 
                    ?> 
                  </div>
                </div>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
<?php endif; wp_reset_postdata();?>
<?php endif; ?>