<?php
add_action('wp_enqueue_scripts', 'account_action_hooks');

function account_action_hooks(){
		ajax_user_ngo_signup_init();
		ajax_user_ngo_login_init();
}


function ajax_user_ngo_login_init(){
    wp_register_script('ajax-user-ngo-login-script', get_stylesheet_directory_uri(). '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-user-ngo-login-script');

    wp_localize_script( 'ajax-user-ngo-login-script', 'ajax_user_ngo_login_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => site_url() . '/author/',
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
		    $active = $author_meta['_user_login_status'][0]; 
		    
	 		if( $active ){
	 			$data['loging_error'] = 'Your account is currently inactive. Please contact authority';
	 			$success = false;
	 		}elseif(!$user || !wp_check_password($password, $user->user_pass, $user->ID) || ($active == 1)) {
				// if the user name doesn't exist
				$data['loging_error'] = 'Invalid username Or Password 1';
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
	            	$data['login_success'] = 'Login successfully. Please wait a second';
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



function ajax_user_ngo_signup_init(){
    wp_register_script('ajax-user-ngo-script', get_stylesheet_directory_uri(). '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-user-ngo-script');

    wp_localize_script( 'ajax-user-ngo-script', 'ajax_user_ngo_signup_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
}
add_action('wp_ajax_nopriv_ngo_user_create_account', 'ngo_user_create_account');
	//add_action('wp_ajax_ngo_user_create_account', 'ngo_user_create_account');
function ngo_user_create_account(){
	$data = array();
	if (isset( $_POST["email"] ) && wp_verify_nonce($_POST['user_ngo_register_nonce'], 'user-ngo-register-nonce')) {
		$user_email   	= sanitize_email($_POST["email"]);
  		$usertype	    = sanitize_text_field($_POST["usertype"]);
  		
  		$agree	    = sanitize_text_field($_POST["agree"]);
  		$user_password	= esc_attr($_POST["user_password"]);
  		$conf_password	= esc_attr($_POST["confirm_password"]);
  		$success = true;
  		if($usertype == 'Ngo'){
  			$ngo_name = sanitize_text_field($_POST["ngo_name"]);
  			if(empty($ngo_name)) {
				//invalid email
				$data['ngo_name'] = 'NGO name is required';
				$success = false;
			}elseif(!preg_match("/^[a-zA-Z]+$/", $ngo_name)) {
			    $data['ngo_name'] = 'Please enter a valid Ngo name';
			    $success = false;
			}
			$username = '';
			$userrole = 'ngo';
  		}else{
  			$your_name = sanitize_text_field($_POST["your_name"]);
  			if(empty($your_name)) {
				//invalid email
				$data['ur_name'] = 'Name is required';
				$success = false;
			}
			$userrole = 'subscriber';
  		}

  		if(!is_email($user_email)) {
			//invalid email
			$data['email'] = 'Invalid email';
			$success = false;
		}elseif(email_exists($user_email)) {
			//Email address already registered
			$data['email'] = 'Email already registered';
			$success = false;
		}

		if(empty($user_password)) {
			$data['pass'] = 'Password is required';
			$success = false;
		}
		if(empty($conf_password)) {
			$data['con_password'] = 'Confirm password is required';
			$success = false;
		}
		if(!empty($user_password) && !empty($conf_password) ) {
			if($user_password != $conf_password){
				$data['match_pass'] = "Don't match password";
				$success = false;
			}
			
		}
		if(isset($user_email) && !empty($user_email)){
			$exp = explode('@', $user_email);
			$user_login = $exp[0];
			if(empty($user_login)) {
				// Username already registered
				$data['username'] = 'Something was wrong please try again';
				$success = false;
			}
		}
		if($success){
			$new_user_id = wp_insert_user(array(
				'user_login'		=> $user_login,
				'user_pass'	 		=> $user_password,
				'user_email'		=> $user_email,
				'first_name'		=> $your_name,
				'user_registered'	=> date('Y-m-d H:i:s'),
				'role'				=> $userrole
				)
			);
			if($new_user_id) {
				if(isset($user_email) && !empty($user_email)){
					update_user_meta ( $new_user_id, '_useremail', $user_email );
				}
				if(isset($ngo_name) && !empty($ngo_name)){
					update_user_meta ( $new_user_id, '_ngo_name', $ngo_name );
				}
				if(isset($agree) && !empty($agree)){
					update_user_meta ( $new_user_id, '_user_agree', $agree );
				}
				add_user_meta( $new_user_id, '_user_login_status', '0', true );
				$user = get_user_by( 'email', sanitize_email($_POST["email"]) );
				/*ob_start();
	            wp_set_current_user( $user->ID, $user->user_login ); 
	            do_action( 'wp_login', $user->user_login );
	            if ( is_user_logged_in() ){
	            	$data['login_success'] = 'Registration Request has been sent successfully. We will send to email for account confirmation within 72 hours. Thanks for patient.';
	            	$data['user_name'] = $user_login;
	            	$data['user_status'] = 'success';
	                echo json_encode($data);
        			wp_die();
	            }else{
	            	$data['user_status'] = 'success';
	            }*/
	            $data['signup_success'] = 'Registration Request has been sent successfully. We will send to email for account confirmation within 72 hours. Thanks for patient.';
            	$data['user_status'] = 'success';
			}else{
				$data['user_status'] = 'error';
			}
		}else{
			$data['user_status'] = 'error';
		}
		echo json_encode($data);
		wp_die();
	}
}


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