<?php
/*
 * initial posts dispaly
 */

function campaign_script_load_more($args = array()) {
  $keyword = $sorting = $hashtag = '';
  $ccat = get_queried_object();
  if( isset($_GET['search']) && !empty($_GET['search'])) $keyword = $_GET['search'];
  if( isset($_GET['sorting']) && !empty($_GET['sorting'])) $sorting = $_GET['sorting'];
  if( isset($_GET['hashtag']) && !empty($_GET['hashtag'])) $hashtag = $_GET['hashtag'];
  echo '<ul class="ulc masonry" id="ajax-content">';
      ajax_camp_script_load_more($args, $ccat->term_id, $keyword, $hashtag, $sorting);
  echo '</ul>';
  echo '<div class="show-more-btn">
  <div class="ajaxloading" id="ajxaloader" style="display:none"><img src="'.THEME_URI.'/assets/images/loading.gif" alt="loader"></div>
   <a href="#" id="loadMore"  data-page="1" data-url="'.admin_url("admin-ajax.php").'" >SHOW MORE</a><span>23 of 62 Campaigns</span>';
   echo '</div>';

}
/*
 * create short code.
 */
add_shortcode('ajax_camp_posts', 'campaign_script_load_more');


/*
 * load more script call back
 */
function ajax_camp_script_load_more($args, $term_id='', $keyword = '', $htag = '', $sort = 'DESC') {
    //init ajax
    $ajax = false;
    //check ajax call or not
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $ajax = true;
    }
    //number of posts per page default
    $num = 2;
    //page number
    $paged = 1;
    if(isset($_POST['cat_id']) && !empty($_POST['cat_id'])){
      $term_id = $_POST['cat_id'];
    }
    if(isset($_POST['key_word']) && !empty($_POST['key_word'])){
        $keyword = $_POST['key_word'];
    }
    if(isset($_POST['sorting']) && !empty($_POST['sorting'])){
        $sort = $_POST['sorting'];
    }
    if(isset($_POST['htag']) && !empty($_POST['htag'])){
      $htag = $_POST['htag'];
    }
    if(isset($_POST['page']) && !empty($_POST['page'])){
        $paged = $_POST['page'] + $paged;
    }

    if(isset($htag) && !empty($htag)){
      $termQuery = array(
        'relation' => 'AND',
        array(
          'taxonomy' => 'campaign',
          'field' => 'term_id',
          'terms' => $term_id
        ),
        array(
          'taxonomy' => 'campaign_tag',
          'field' => 'slug',
          'terms' => $htag
        )
      );
    }
    else{
      $termQuery = array(
        array(
          'taxonomy' => 'campaign',
          'field' => 'term_id',
          'terms' => $term_id
        )
      );
    }
    
    $query = new WP_Query(array( 
        'post_type'=> 'campaigns',
        'post_status' => 'publish',
        's' => $keyword,
        'posts_per_page' =>$num,
        'paged'=>$paged,
        'orderby' => 'date',
        'order'=> $sort,
        'tax_query' => $termQuery
      ) 
    );
    if($query->have_posts()):
      $i = 1;
    while($query->have_posts()): $query->the_post();
      $attach_id = get_post_thumbnail_id(get_the_ID());
      if( !empty($attach_id) ){
        $feaimg_src = cbv_get_image_src($attach_id, 'campgrid');
      }else{
        $feaimg_src = THEME_URI.'/assets/images/dfcampgrid.png';
      }
      $rel_terms = get_the_terms( get_the_ID(), 'campaign' );
      $rel_term_name = '';
      if ( ! empty( $rel_terms ) ) {
          foreach( $rel_terms as $rel_term ) {
             $rel_term_name = $rel_term->name; 
          }
      }
    ?>
        <li class="campaigns-list-item-wrp <?php if(($i == 1)): ?>campaigns-list-item-50<?php endif; if(isset($_POST['cat_id']) && !empty($_POST['cat_id'])) echo $_POST['cat_id'];?> ">
          <div class="campaigns-list-item">
            <div class="campaigns-item-img" style="background: url(<?php echo $feaimg_src; ?>);"></div>
            <div class="campaigns-item-des">
              <div class="campaigns-item-des-inr">
                <div class="campaigns-item-cat-name">
                  <?php if( !empty($rel_term_name) ) printf('<strong>%s</strong>', $rel_term_name); ?>
                  <span>
                    <i class="far fa-heart"></i>
                  </span>
                </div>
                <div class="campaigns-item-des-btm">
                  <div>
                    <h6><?php the_title(); ?></h6>
                    <?php echo wpautop( camp_excerpt(14, ''), true ); ?>
                  </div>
                  <div class="campaigns-vote-info">
                    <div class="campaigns-vote-percentage-bar clearfix">
                      <div class="campaigns-vote-percentage-number"><span><?php echo camp_progress_bar(get_the_ID()); ?>%</span></div>
                      <div class="campaigns-vote-percentage">
                        <div>
                          <span style="width: <?php echo camp_progress_bar(get_the_ID()); ?>%"></span>
                        </div>
                      </div>
                    </div>
                    <div class="months-left">
                      <?php if(date_remaining(get_the_ID())): ?>
                        <i class="far fa-clock"></i>
                        <span><?php echo date_remaining(get_the_ID()); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="campaigns-list-item-des-hover">
              <div class="campaigns-list-item-des-hover-inr">
                <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                <div class="campaigns-item-cat-name">
                  <?php if( !empty($rel_term_name) ) printf('<strong>%s</strong>', $rel_term_name); ?>
                  <span>
                    <i class="far fa-heart"></i>
                  </span>
                </div>
                <div class="campaigns-list-item-des-hover-des">
                  <h6><?php the_title(); ?></h6>
                  <?php echo wpautop( camp_excerpt(30, ''), true ); ?>
                </div>
                <div class="campaigns-vote-percentage-hover-bar">
                  <div class="campaigns-vote-info">
                    <div class="campaigns-vote-percentage-bar clearfix">
                      <div class="campaigns-vote-percentage-number"><span><?php echo camp_progress_bar(get_the_ID()); ?>%</span></div>
                      <div class="campaigns-vote-percentage">
                        <div>
                          <span style="width: <?php echo camp_progress_bar(get_the_ID()); ?>%"></span>
                        </div>
                      </div>
                    </div>
                    <div class="months-left">
                      <?php if(date_remaining(get_the_ID())): ?>
                        <i class="far fa-clock"></i>
                        <span><?php echo date_remaining(get_the_ID()); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </li>
        <?php
        $i++;
    endwhile; 
    endif;  
    
    wp_reset_postdata();
    
    //check ajax call
    if($ajax) wp_die();
}

/*
 * load more script ajax hooks
 */
add_action('wp_ajax_nopriv_ajax_camp_script_load_more', 'ajax_camp_script_load_more');
add_action('wp_ajax_ajax_camp_script_load_more', 'ajax_camp_script_load_more');