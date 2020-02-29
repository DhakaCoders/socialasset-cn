<?php 
$order = 'asc';
if( isset($_GET['sorting']) && !empty($_GET['sorting'])){
  $order = $_GET['sorting'];
}
?>
<div id="tab-2" class="">
  <div class="tab-con-inr ">
    <div class="supported-campaigns-tab-hdr clearfix">
      <strong>Your Campaigns</strong>
      <div class="sort-by clearfix">
        <label>Sort by</label>
        <div class="sa-selctpicker-ctlr">
            <select id="campaign_sort" class="selectpicker">
              <option <?php echo ($order=='asc')? 'selected="selected"': ''; ?> value="asc">Old Campaigns</option>
              <option <?php echo ($order=='desc')? 'selected="selected"': ''; ?> value="desc">New Campaigns</option>
            </select>
        </div>
      </div>
    </div>
    <span id="all_campaign" data-campurl="<?php echo esc_url(home_url('myaccount/supported-campaigns/'));?>" style="display: none;"></span>
    <?php 
    if(isset($umetas['_support_camp_ids']) && !empty($umetas['_support_camp_ids'])):
    $support_ids = $umetas['_support_camp_ids'];
    $array_support_ids = explode(',', $support_ids);
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $Query = new WP_Query(array( 
        'post_type'=> 'campaigns',
        'post_status' => array('publish', 'draft', 'pending'),
        'posts_per_page' => 10,
        'paged' => $paged,
        'order'=> $order,
        'post__in' => $array_support_ids
      ) 
    );

    ?>
    <?php if( $Query->have_posts() ): ?>
    <div class="supported-campaigns-tab-items">
      <ul class="clearfix ulc">
        <?php 
            while($Query->have_posts()): $Query->the_post(); 
            $attach_id = get_post_thumbnail_id(get_the_ID());
            if( !empty($attach_id) ){
              $feaimg_src = cbv_get_image_src($attach_id, 'medium');
            }else{
              $feaimg_src = THEME_URI.'/assets/images/dfcamp.png';
            }

            $categories = get_the_terms( get_the_ID(), 'campaign' );
            $term_name = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                   $term_name = $category->name; 
                }
            }

            $SupportLimit = get_post_meta( get_the_ID() ,'target_supporters', true );
            $totalSupport = get_post_meta( get_the_ID() , '_supported_count', true );
            $expire_date = get_field('capmpaign_to_date', get_the_ID());
            $expire ='';
            if( !empty($expire_date) ) $expire = $expire_date;
          ?>
        <li class="campaigns-list-item-wrp">
          <div class="campaigns-list-item">
            <div class="campaigns-item-img" style="background: url(<?php echo $feaimg_src; ?>);"></div>
            <div class="campaigns-item-des">
              <div class="campaigns-item-des-inr">
                <div class="campaigns-item-cat-name">
                  <?php if( !empty($term_name) ): ?>
                  <strong><?php echo $term_name; ?></strong>
                  <?php endif; ?>
                </div>
                <div class="campaigns-item-des-btm">
                  <div>
                    <h6><?php the_title(); ?></h6>
                    <?php echo wpautop( camp_excerpt(), true );

                    $percentange = camp_progress_bar($SupportLimit, $totalSupport);
                    $prog_value = 0;
                    if( $percentange ) $prog_value = $percentange;
                    ?>
                  </div>
                  <div class="campaigns-vote-percentage-bar clearfix">
                      <div class="campaigns-vote-percentage-number"><span><?php echo $prog_value; ?>%</span></div>
                      <div class="campaigns-vote-percentage">
                        <div>
                          <span style="width: <?php echo $prog_value; ?>%"></span>
                        </div>
                      </div>
                    </div>
                    <div class="months-left">
                      <?php 
                        if(!empty($expire)): 
                          if(date_remaining($expire)):
                      ?>
                      <i class="far fa-clock"></i>
                      <span><?php echo date_remaining($expire);?></span>
                      <?php endif; endif; ?>
                    </div>
                  </div>
              </div>
            </div>

          </div>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
    <?php endif; wp_reset_postdata();?>
    <?php endif; ?>
  </div>
</div>