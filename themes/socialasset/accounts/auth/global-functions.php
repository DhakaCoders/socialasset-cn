<?php
add_action('init', 'global_action_hook');

function global_action_hook(){
	if(is_user_logged_in()){
		user_profile_image_update();
		user_change_password_customly();
	}
	
}

function user_profile_image_update(){
	global $msg;
	if (isset( $_POST["save_profile_logo"] ) && wp_verify_nonce($_POST['user_change_profile_image_nonce'], 'user-change-profile-image-nonce')) {
		$user = wp_get_current_user();
		if( $user ){
			if(isset( $_POST["_ngo_name"] ) && !empty($_POST["_ngo_name"])){
				update_user_meta( $user->ID, '_ngo_name', $_POST["_ngo_name"]);
			}
			if(isset( $_POST["_profile_logo_id"] ) && !empty($_POST["_profile_logo_id"])){
				if(! add_user_meta( $user->ID, '_profile_logo_id', $_POST['_profile_logo_id'], true )){ 
					update_user_meta( $user->ID, '_profile_logo_id', $_POST['_profile_logo_id'] );
				}
			}
			if(isset( $_POST["_about_ngo"] ) && !empty($_POST["_about_ngo"])){
				if(! add_user_meta( $user->ID, '_about_ngo', $_POST['_about_ngo'], true )){ 
					update_user_meta( $user->ID, '_about_ngo', $_POST['_about_ngo'] );
				}
			}
			$msg['success'] = 'Updated successfully.';

		}else{
  			$msg['error'] = 'Something was wrong please try again.';
  		}
	}
}

function user_change_password_customly(){
	global $msg;
	if (isset( $_POST["change_pass"] ) && wp_verify_nonce($_POST['user_change_password_nonce'], 'user-change-password-nonce')) {
		$user = wp_get_current_user();
		$currnt_pass	= esc_attr($_POST["currnt_pass"]);
  		$new_pass	= esc_attr($_POST["new_pass"]);
  		if($user){
  			if( !wp_check_password($currnt_pass, $user->user_pass, $user->ID) ) {
				// if the user name doesn't exist
				$msg['error'] = 'Current password not matching';
			}else{
				$userdata = array(
		            'ID'        =>  $user->ID,
		            'user_pass' =>  $new_pass,
		        );  
	    		$user_id = wp_update_user($userdata);
	    		if($user_id){
	    			$msg['success'] = 'Password updated successfully.';
	    		}else{
	    			$msg['error'] = 'Could not update';
	    		}
			}
  		}else{
  			$msg['error'] = 'Something was wrong please try again.';
  		}
	}
	return false;
}



if(!function_exists('get_user_profile_logo_tag')){
	function get_user_profile_logo_tag($media_id, $size = 'thumbnail', $title = false){

		if( isset( $media_id ) && !empty($media_id)){
			$output = '';
			$image_title = get_the_title($media_id);
			$image_alt = get_post_meta( $media_id, '_wp_attachment_image_alt', true);
		    if( empty( $image_alt ) ){
		      $image_alt = $image_title;
		    }
			$image_src = wp_get_attachment_image_src( $media_id, $size, false );

			if( $title ){
				$output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'" title="'.$image_title.'">';
			}else{
				$output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'">';
			}

			return $output;
		}
		return false;
	}
}

