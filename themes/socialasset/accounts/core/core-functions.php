<?php
function get_ao_custom_logout($page_link = ''){
    if(!empty($page_link)){
      echo wp_logout_url( site_url() . '/'.$page_link );
    }else{
      echo wp_logout_url( site_url());
    }
    
}

//add_filter('secure_auth_redirect', 'redirect_user_frontend_dashboard');
function redirect_user_frontend_dashboard(){
  $user = wp_get_current_user();
  if( is_admin() ){
    if ( in_array( 'ngo', (array) $user->roles ) && is_user_logged_in() ) {
      if ( wp_safe_redirect( site_url() . '/myaccount/' ) ) {
  	    exit;
      }
    }elseif(in_array( 'subscriber', (array) $user->roles ) && is_user_logged_in()){
      if ( wp_safe_redirect( site_url() . '/myaccount/' ) ) {
    	 exit;
    	}
        
    }elseif(in_array( 'business', (array) $user->roles ) && is_user_logged_in()){
      if ( wp_safe_redirect( site_url() . '/myaccount/') ) {
    		exit;
    	}
    }
  }
   return false;
}

function custom_rewrite_rule() {
    add_rewrite_rule('^myaccount/([^/]+)([/]?)(.*)','index.php?pagename=myaccount&var1=$matches[1]&var2=$matches[3]&var3=$matches[5]&var4=$matches[7]','top');

}

function custom_rewrite_tag() {
  add_rewrite_tag('%var1%', '([^&]+)');
  add_rewrite_tag('%var2%', '([^&]+)');
  add_rewrite_tag('%var3%', '([^&]+)');
  add_rewrite_tag('%var4%', '([^&]+)');
}
add_action('init', 'custom_rewrite_tag', 10, 0);
add_filter('init', 'custom_rewrite_rule');

/*add_action('init', function(){
   add_rewrite_rule( 
      '^myaccount/([^/]+)([/]?)(.*)', 
      //!IMPORTANT! THIS MUST BE IN SINGLE QUOTES!:
      'index.php?pagename=myaccount&action=$matches[1]', 
      'top'
   ); 
});
add_filter('query_vars', function( $vars ){
    $vars[] = 'pagename'; 
    $vars[] = 'action'; 
    return $vars;
});*/

add_action('admin_init', 'activate_page_action');

function activate_page_action(){
  // page creation when activation
  if ( get_page_by_title('Myaccount') == null) {
     $my_post = array(
        'post_title'    => wp_strip_all_tags( 'Myaccount' ),
        'post_content'  => '[my_account]',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
      );
      wp_insert_post( $my_post );
  }
}



add_action('admin_init', 'add_custom_role');

function add_custom_role(){
  if(!get_role( 'ngo' )){
  	add_role('ngo', __(
     'NGO')
  	);
  }
  if(!get_role( 'business' )){
  	add_role('business', __(
  		'Business')
  	);
  }

}
//add_action('admin_init', 'wpremove_role');
function wpremove_role(){
remove_role( 'business' );
remove_role( 'ngo' );
}

add_action('init', 'allow_ngo_uploads');
if(!function_exists('allow_ngo_uploads')){
  function allow_ngo_uploads() {
    $ngo_role = get_role('ngo');
    $ngo_role->add_cap('read');
    $ngo_role->add_cap('upload_files');
    //$ngo_role->add_cap('edit_posts');


    $b_role = get_role('business');
    $b_role->add_cap('read');
    $b_role->add_cap('upload_files');


    $sb_role = get_role('subscriber');
    $sb_role->add_cap('upload_files');
  }
}

if(!function_exists('get_custom_post_taxnomy_dropdown')){
  function get_custom_post_taxnomy_dropdown($tax = 'campaign', $value = ''){
    $args = array(
          'show_option_all'    => '',
          'show_option_none'  => 'Choose Category',
          'orderby'      => 'name',
          'tab_index'          => 2,
          'hide_empty'         => false,
          'name'               => $tax,
          'class'              => 'selectpicker',
          'taxonomy'           => $tax,
          'selected'          => isset( $value ) ? (int) $value : -1,
          'hide_if_empty'      => false,
          'value_field'        => 'term_id',
          'hierarchical' => true,
          'depth' => 2,
          'required'=> true
      );
    wp_dropdown_categories( $args );
  }
}

function get_custom_content_editor($editor, $content = NULL){
  $editor = isset($editor)? $editor: 'post_content';
  $content = isset($content)? $content:'';
  $editor_id = $editor;
  $settings =   array(
      'wpautop' => true,
      'media_buttons' => true,
      'textarea_name' => $editor_id, 
      'textarea_rows' =>get_option('default_post_edit_rows', 10), 
      'tabindex' => '',
      'editor_css' => '', 
      'editor_class' => '',
      'teeny' => false,
      'dfw' => false,
      'tinymce' => true,
      'quicktags' => true 
      );
  wp_editor( $content, $editor_id, $settings); 
}


function get_campaign_tags(){
  $camp_tags = get_terms( array(
      'taxonomy' => 'campaign_tag',
      'hide_empty' => false
  ) );
  $imp_ctags = '';
  if ( !empty( $camp_tags ) && !is_wp_error( $camp_tags ) ) {
    $ctags = array();
    foreach ($camp_tags as $camp_tags) {
      $ctags[] = $camp_tags->name;
    }
    $imp_ctags = implode('", "', $ctags);
  }
  if( isset($imp_ctags) && !empty($imp_ctags) ){
    return $imp_ctags;
  }else{
    return false;
  }
  
}

function camp_excerpt($limit = 13, $dot = ' ...') {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).$dot;
  } else {
    $excerpt = implode(" ",$excerpt).$dot;
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`',$dot,$excerpt);
  return $excerpt;
}

function camp_expire_date($expiredate){

  if( !empty($expiredate) ){
    $expire = strtotime($expiredate);
    $today = strtotime("today midnight"); 
    if( $today >= $expire ){
      return true;
    }
    return false;
  }else{
    return false;
  }

}

function date_remaining($expire){
  $diff = false;
  $time = new DateTime($expire);
  $timediff = $time->diff(new DateTime());
  if(!empty($timediff)):
    if( $timediff->y >=2){
      $diff = $timediff->format('%y years left');
    }
    elseif($timediff->y == 1  ){
      $diff = $timediff->format('%y year left');
    }
    elseif($timediff->m >=2){
      $diff = $timediff->format('%m months left');
    }
    elseif($timediff->m == 1){
      $diff = $timediff->format('%m month left');
    }
    elseif($timediff->d >= 2){
      $diff = $timediff->format('%d days left');
    }
    elseif( ($timediff->d == 1)){
      $diff = $timediff->format('%d day left');
    }
    elseif( ($timediff->h >= 0) ){
      $diff = $timediff->format('1 day left');
    }
  endif;
  return $diff;
}

function get_camp_video_url($video_id){
  if( empty($video_id) ) return;
  $video_url = wp_get_attachment_url($video_id);
  if( !empty($video_url) )
    return $video_url;
  else
    return false;
  
}
function is_capm_video( $video_id ){
  if( empty($video_id) ) return;

  $isVedio = wp_attachment_is('video', $video_id );
  if( $isVedio )
    return true;
  else
    return false;
}

function camp_is_date($date){
  if( preg_match("/\d{2}\-\d{2}-\d{4}/", $date) ) {
    return true;
  }
  return false;
}