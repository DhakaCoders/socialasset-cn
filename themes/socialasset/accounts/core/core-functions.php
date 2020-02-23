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
    //add_rewrite_rule('^myaccount/([^/]*)/([^/]*)/?','index.php?pagename=myaccount&country=$matches[1]&region=$matches[2]','top');
    //add_rewrite_rule('^([^/]*)/([^/]*)/?','index.php?pagename=myaccount&country=$matches[1]&region=$matches[2]','top');
    add_rewrite_rule('^([^/]*)/([^/]*)/?','index.php?pagename=myaccount&mycampaigns=$matches[1]','top');
    add_rewrite_rule('^([^/]*)/([^/]*)/?','index.php?pagename=myaccount&edit-campaign=$matches[1]','top');
}
function register_custom_query_vars($vars){
  array_push($vars, 'edit-campaign');
  array_push($vars, 'mycampaigns');
  array_push($vars, 'region');
  array_push($vars, 'country');
  return $vars;
}
add_action('init', 'custom_rewrite_rule');
add_filter('query_vars', 'register_custom_query_vars', 1);



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


