<?php 
add_action('wp_enqueue_scripts', 'account_login_action_hooks');

function account_login_action_hooks(){
		ajax_user_ngo_login_init();
		ajax_business_login_init();
}


function ajax_business_login_init(){
    wp_register_script('ajax-business-login-script', get_stylesheet_directory_uri(). '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-business-login-script');

    wp_localize_script( 'ajax-business-login-script', 'ajax_business_login_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => site_url() . '/myaccount/',
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
}
add_action('wp_ajax_nopriv_business_login_account', 'business_login_account');



function business_login_account(){
	if (isset( $_POST["email"] ) && wp_verify_nonce($_POST['business_login_nonce'], 'business-login-nonce')) {
		$success = true;
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$user = get_user_by( 'email', sanitize_email($_POST["email"]) );
			$data['email'] = ' ';
		}elseif(empty($_POST["email"])){
			$data['email'] = 'Email is required';
			$success = false;
			$user = false;
		}
		$password = esc_attr($_POST['password']);
		$data['pass'] = ' ';
		if(empty($password)) {
			$data['pass'] = 'Password is required';
			$success = false;
			$user = false;
		}
		// this returns the user ID and other info from the user name
		if($user){
			$author_meta = get_user_meta($user->ID);
		    
	 		if(!$user || !wp_check_password($password, $user->user_pass, $user->ID) || ($user->roles[0] != 'business') ) {
				// if the user name doesn't exist
				$data['loging_error'] = 'Invalid username Or Password';
				$success = false;
			}
			if($success){
		        wp_clear_auth_cookie();
	            wp_set_current_user( $user->ID, $user->user_login );
	            if (wp_validate_auth_cookie()==FALSE)
				{
				    wp_set_auth_cookie($user->ID, false, false);
				}
	            do_action( 'wp_login', $user->user_login );
	            if ( is_user_logged_in() ){
	            	$data['user_name'] = $user->user_login;
	            	$data['login_success'] = 'Login successfull. Please wait...';
	            	$data['login_status'] = 'success';
	                echo json_encode($data);
	    			wp_die();
	            }
	        }
		}else{
			$data['loging_error'] = 'Invalid username Or password';
		}

        echo json_encode($data);
        wp_die();
	}
	return false;
}



function ajax_user_ngo_login_init(){
    wp_register_script('ajax-user-ngo-login-script', get_stylesheet_directory_uri(). '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-user-ngo-login-script');

    wp_localize_script( 'ajax-user-ngo-login-script', 'ajax_user_ngo_login_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => site_url() . '/myaccount/',
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
}
add_action('wp_ajax_nopriv_ngo_user_login_account', 'ngo_user_login_account');



function ngo_user_login_account(){
	if (isset( $_POST["email"] ) && wp_verify_nonce($_POST['user_ngo_login_nonce'], 'user-ngo-login-nonce')) {
		$success = true;
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$user = get_user_by( 'email', sanitize_email($_POST["email"]) );
			$data['email'] = ' ';
		}elseif(empty($_POST["email"])){
			$data['email'] = 'Email is required';
			$success = false;
			$user = false;
		}
		$password = esc_attr($_POST['password']);

		if(empty($password)) {
			$data['pass'] = 'Password is required';
			$success = false;
			$user = false;
		}else{
			$data['pass'] = ' ';
		}
		// this returns the user ID and other info from the user name
		if($user){
			$author_meta = get_user_meta($user->ID);
		    
	 		if(!$user || !wp_check_password($password, $user->user_pass, $user->ID) || ($user->roles[0] == 'business') ) {
				// if the user name doesn't exist
				$data['loging_error'] = 'Invalid username Or Password';
				$success = false;
			}
			if($success){
		        wp_clear_auth_cookie();
	            wp_set_current_user( $user->ID, $user->user_login );
	            if (wp_validate_auth_cookie()==FALSE)
				{
				    wp_set_auth_cookie($user->ID, false, false);
				}
	            do_action( 'wp_login', $user->user_login );
	            if ( is_user_logged_in() ){
	            	$data['user_name'] = $user->user_login;
	            	$data['login_success'] = 'Login successfull. Please wait...';
	            	$data['login_status'] = 'success';
	                echo json_encode($data);
	    			wp_die();
	            }
	        }
		}else{
			$data['loging_error'] = 'Invalid username Or Password';
		}

        echo json_encode($data);
        wp_die();
	}
	return false;
}