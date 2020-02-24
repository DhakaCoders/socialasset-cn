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
    add_rewrite_rule('^myaccount/([^/]*)/([^/]*)/?','index.php?pagename=myaccount&action=$matches[1]&string=$matches[2]','top');
}

function custom_rewrite_tag() {
  add_rewrite_tag('%action%', '([^&]+)');
  add_rewrite_tag('%string%', '([^&]+)');
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


