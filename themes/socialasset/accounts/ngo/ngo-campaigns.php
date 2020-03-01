<?php 
$date_arg = $keyword = '';
$per_page = 3;
if(isset($_GET['search']) && !empty($_GET['search'])){
  $keyword = $_GET['search'];
}elseif(isset($_GET['archive']) && !empty($_GET['archive'])){
  $exp_date = explode('-', $_GET['archive']);
  $date_arg = array(
       'year'  => $exp_date[2],
       'month' => $exp_date[0],
       'day'   => $exp_date[1],
      );

}



if(isset($_COOKIE['per_page']) && !empty($_COOKIE['per_page'])) {
  $per_page = $_COOKIE['per_page'];
}
$var2 = $wp_query->get( 'var2' );
if( isset($var2) && !empty($var2) )
  $var2_int = (int) filter_var($var2, FILTER_SANITIZE_NUMBER_INT);
else
  $var2_int = '';

$paged = (!empty($var2_int)) ? $var2_int : 1;
$Query = new WP_Query(array( 
    'post_type'=> 'campaigns',
    'post_status' => array('publish', 'draft', 'pending'),
    'posts_per_page' => $per_page,
    'paged' => $paged,
    'order'=> 'DESC',
    's' => $keyword,
    'date_query' => array($date_arg),
  ) 
);

?>
<span id="all_campaign" data-campurl="<?php echo esc_url(home_url('myaccount/mycampaigns/'));?>" style="display: none;"></span>
<div id="tab-2" class="">
  <div class="tab-con-inr">
    <div class="ngo-campaigns-tab-hdr clearfix">
      <strong><span id="total_active_camp"><?php echo get_count_posts_by_author('campaigns', $user->ID); ?></span> Active Campaigns</strong>
      <div class="ngo-campaigns-tab-hdr-rgt">
        <form id="archive_form">
          <div class="ngo-archive">
            <label>Archive</label>
            <div class="ngo-archive-date">
              <input type="text" class="archive_date" id="datepicker">
              <img src="<?php echo THEME_URI; ?>/assets/images/calender.png">
            </div>
          </div>
        </form>
          <form action="" method="get">
          <div class="search-by-name">
            <input type="search" name="search" value="<?php echo $keyword; ?>">
            <button><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <?php if( $Query->have_posts() ): ?>
    <div class="dfp-tbl-wrap">
      <div class="table-dsc">
        <table>
          <thead>
            <tr>
              <th><span>Date </span></th>
              <th><span> Category</span></th>
              <th><span>Campaign</span></th>
              <th><span>Status</span></th>
              <th><span>Progress</span></th>
            </tr>
          </thead>
          <tbody>
          <?php 
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

          ?>
            <tr class="edit-action" id="camppost_<?php echo get_the_ID(); ?>">
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
                      <div class="campaign-action">
                        <a href="<?php echo home_url('myaccount/edit-campaign/'.get_the_ID())?>">Edit</a> 
                        <?php if( !camp_expire_date(get_the_ID()) ){ ?>
                        | <a href="<?php echo esc_url(home_url('myaccount/mycampaigns/'.get_the_ID()));?>" onclick="return confirm('Are you sure you want to delete at this campaign: <?php echo get_the_title() ?>?')" style="color: red;" data-id="<?php the_ID() ?>" data-nonce="<?php echo wp_create_nonce('my_delete_camp_nonce') ?>" class="delete-capm">Delete</a> 
                        <?php } ?>
                        | <a href="<?php the_permalink(); ?>" target="_blank">View</a> 
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="tbl-td">
                  <strong>Status</strong>
                  <?php
                    if( camp_expire_date(get_the_ID()) ){
                      echo '<span class="status-btn status-btn-expired">EXPIRED</span>';
                    }elseif($camp_data->post_status == 'publish'){
                      echo '<span class="status-btn status-btn-active">ACTIVE</span>';
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
                  <strong>Progress</strong>
                  <div class="ngo-td-progress">
                    <span><?php echo camp_progress_bar(get_the_ID()); ?>%</span>
                  </div>
                </div>
              </td>
            </tr>
            <?php endwhile; ?>
            

            
          </tbody>
        </table>
      </div>
    </div>
    <div class="pagi-select-area clearfix">
      <div class="fl-pagi-pagi-ctlr">
          <?php 
            if( $Query->max_num_pages > 1 ):
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, $var2_int ),
              'total' => $Query->max_num_pages,
              'type'  => 'list',
              'show_all' => true,
              'prev_next' => false
            ) );
            endif; 
          ?>
      </div>
      <div class="showing-page-select">
        <div class="sa-selctpicker-ctlr">
          <select class="selectpicker" id="perpage_set">
            <option <?php echo ($per_page == 1)? 'selected="selected"': ''; ?>>1</option>
            <option <?php echo ($per_page == 2)? 'selected="selected"': ''; ?>>2</option>
            <option <?php echo ($per_page == 3)? 'selected="selected"': ''; ?>>3</option>
            <option <?php echo ($per_page == 4)? 'selected="selected"': ''; ?>>4</option>
            <option <?php echo ($per_page == 5)? 'selected="selected"': ''; ?>>5</option>
            <option <?php echo ($per_page == 6)? 'selected="selected"': ''; ?>>6</option>
            <option <?php echo ($per_page == 7)? 'selected="selected"': ''; ?>>7</option>
            <option <?php echo ($per_page == 8)? 'selected="selected"': ''; ?>>8</option>
            <option <?php echo ($per_page == 9)? 'selected="selected"': ''; ?>>9</option>
            <option <?php echo ($per_page == 10)? 'selected="selected"': ''; ?>>10</option>
             <option <?php echo ($per_page == 11)? 'selected="selected"': ''; ?>>11</option>
          </select>
        </div>
        <span>Showing 1-<?php echo $per_page; ?> of <?php echo $Query->found_posts;?></span>
      </div>
    </div>
    <?php else: ?>
    <?php endif; wp_reset_postdata();?>
  </div>
</div>