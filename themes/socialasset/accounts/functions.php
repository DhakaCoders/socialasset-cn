<?php
add_action('init', 'account_action_hooks');

function account_action_hooks(){
	ajax_user_ngo_signup_init();
}


function ajax_user_ngo_signup_init(){
    wp_register_script('ajax-user-ngo-script', THEME_URI. '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-user-ngo-script');

    wp_localize_script( 'ajax-user-ngo-script', 'ajax_user_ngo_signup_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ngo_user_create_account', 'ngo_user_create_account');
}

function ngo_user_create_account(){
	if (isset( $_POST["username"] ) && wp_verify_nonce($_POST['user_register_nonce'], 'user-register-nonce')) {
	}
}