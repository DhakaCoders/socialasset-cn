<?php
function get_ao_custom_logout($page_link = ''){
    if(!empty($page_link)){
      echo wp_logout_url( site_url() . '/'.$page_link );
    }else{
      echo wp_logout_url( site_url());
    }
    
}

add_action('admin_init', 'redirect_user_frontend_dashboard');
function redirect_user_frontend_dashboard(){
   $user = wp_get_current_user();
   if ( in_array( 'ngo', (array) $user->roles ) && is_user_logged_in() ) {
    if ( wp_safe_redirect( site_url() . '/author/'.$user->user_login ) ) {
		exit;
	}
   }elseif(in_array( 'subscriber', (array) $user->roles ) && is_user_logged_in()){
   	if ( wp_safe_redirect( site_url() . '/author/'.$user->user_login ) ) {
		exit;
	}
      
   }elseif(in_array( 'business', (array) $user->roles ) && is_user_logged_in()){
    if ( wp_safe_redirect( site_url() . '/author/'.$user->user_login ) ) {
		exit;
	}
   }
   return false;
}


add_action('admin_init', 'add_custom_role');

function add_custom_role(){
	add_role('ngo', __(
   'NGO'),
   	   array(
       'read'            => true, // Allows a user to read
       'create_posts'      => true, // Allows user to create new posts
       'edit_posts'        => true, // Allows user to edit their own posts
       'edit_others_posts' => true, // Allows user to edit others posts too
       'publish_posts' => true, // Allows the user to publish posts
       'manage_categories' => true, // Allows user to manage post categories
       )
	);

	add_role('business', __(
		'Business'),
		array(
		'read' => true, // Allows a user to read
		'create_posts' => true, // Allows user to create new posts
		'edit_posts' => true, // Allows user to edit their own posts
		)
	);

}