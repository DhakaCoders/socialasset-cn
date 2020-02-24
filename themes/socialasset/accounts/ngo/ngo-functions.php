<?php
add_action('init', 'ngo_campaign_action_hook');

function ngo_campaign_action_hook(){
	if(is_user_logged_in()){
		ngo_campaign_create();
	}
	
}
function ngo_campaign_create(){
	global $msg;
	if (isset( $_POST["add_campaign"] ) && wp_verify_nonce($_POST['ngo_add_campaign_nonce'], 'ngo-add-campaign-nonce')) {
		$user = wp_get_current_user();
		if(isset($_POST['campaign']) && $_POST['campaign'] == '-1'){
			$campaigncat = '';
		}else{
			$campaigncat = $_POST['campaign'];
		}
		if(empty($msg)){
			$post_information = array(
				'post_author' => $user->ID,
			    'post_title' => wp_strip_all_tags( $_POST['post_title'] ),
			    'post_content' => $_POST['capmaign_content'],
			    'post_type' => 'campaigns',
			    'post_status' => 'publish'
			);
			 
			$pid = wp_insert_post($post_information);

			if(!empty($campaigncat)){
				global $wpdb;
				$object_id = (int) $pid;
				$cat_id = (int) $campaigncat;
				$wpdb->insert(
		            $wpdb->term_relationships,
		            array(
		                'object_id'        => $object_id,
		                'term_taxonomy_id' => $cat_id,
		            )
		        );
			}
			/*$campaign_tag = (isset($_POST['campaign_tag']) && !empty($_POST['campaign_tag']))? trim($_POST['campaign_tag']): '';
			if(!empty($campaign_tag)){
				global $wpdb;
				$object_id = (int) $pid;
				$spacial_offer_id = (int) $campaign_tag;
				$wpdb->insert(
		            $wpdb->term_relationships,
		            array(
		                'object_id'        => $object_id,
		                'term_taxonomy_id' => $spacial_offer_id,
		            )
		        );
			}*/
			/*if(isset($_POST['attachment_id_array']) && !empty($_POST['attachment_id_array'])){
				$thumbnail_ids = implode(',', $_POST['attachment_id_array']);
				if ( ! add_post_meta( $pid, '_thumbnail_ids', $thumbnail_ids, true ) ) { 
				   update_post_meta ( $pid, 'thumbnail_ids', $thumbnail_ids );
				}
			}
			if(isset($_POST['_thumbnail_id'])){
				set_post_thumbnail( $pid, $_POST['_thumbnail_id'] );
			}*/
			if(!empty($_POST['fromt_date']) && !empty($_POST['to_date'])){
				add_post_meta( $pid, 'capmpaign_from_date', $_POST['fromt_date'], true );
				add_post_meta( $pid, 'capmpaign_to_date', $_POST['to_date'], true );
			}
			add_post_meta( $pid, '_capmpaign_status', 'draft', true );
			add_post_meta( $pid, '_supported_count', '0', true );
			add_post_meta( $pid, '_supporter_ids', '', true );
			$msg['success'] = 'Campaign saved successfully';
		}else{
			$msg['error'] = 'Could not save';
		}
		return $msg;
	}
	return false;
}