<?php

add_action( 'show_user_profile', 'my_custom_user_profile_field' );
add_action( 'edit_user_profile', 'my_custom_user_profile_field' );
function my_custom_user_profile_field( $user ) { 
	$status = get_the_author_meta( '_user_account_status', $user->ID );
	$myprofile = get_the_author_meta( '_show_my_profile', $user->ID );
	$mycamp = get_the_author_meta( '_show_my_campaigns', $user->ID );
?>
    <h3>User Status: </h3>
    <table class="form-table">
        <tr>
            <th><label for="my-custom-user-profile-field">Account Status:</label></th>
            <td>
                <input type="checkbox" <?php echo (!empty($status) && $status == 'active')? 'checked': ''; ?> name="_user_account_status" id="_user_account_status" value="active"> Active
            </td>
        </tr>
        <tr>
            <th><label for="my-custom-user-profile-field">My Profile Tab:</label></th>
            <td>
                <input type="checkbox" <?php echo (!empty($myprofile) && $myprofile == 'true')? 'checked': ''; ?> name="_show_my_profile" id="_show_my_profile" value="true"> Yes
            </td>
        </tr>
        <tr>
            <th><label for="my-custom-user-profile-field">My Campaigns Tab:</label></th>
            <td>
                <input type="checkbox" <?php echo (!empty($mycamp) && $mycamp == 'true')? 'checked': ''; ?> name="_show_my_campaigns" id="_show_my_campaigns" value="true"> Yes
            </td>
        </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_my_custom_user_profile_field' );
add_action( 'edit_user_profile_update', 'save_my_custom_user_profile_field' );
function save_my_custom_user_profile_field( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    if( isset($_POST['_user_account_status']) && !empty($_POST['_user_account_status']))
    	update_user_meta( absint( $user_id ), '_user_account_status', wp_kses_post( $_POST['_user_account_status'] ) );
	else
		update_user_meta( absint( $user_id ), '_user_account_status', wp_kses_post( 'draft' ) );

    if( isset($_POST['_show_my_profile']) && !empty($_POST['_show_my_profile']))
    	update_user_meta( absint( $user_id ), '_show_my_profile', wp_kses_post( $_POST['_show_my_profile'] ) );
	else
		update_user_meta( absint( $user_id ), '_show_my_profile', wp_kses_post( 'false' ) );
	
	if( isset($_POST['_show_my_campaigns']) && !empty($_POST['_show_my_campaigns']))
    	update_user_meta( absint( $user_id ), '_show_my_campaigns', wp_kses_post( $_POST['_show_my_campaigns'] ) );
	else
		update_user_meta( absint( $user_id ), '_show_my_campaigns', wp_kses_post( 'false' ) );
}


//add columns to User panel list page
function add_user_columns($column) {
    $column['_user_account_status'] = 'Account Status';
    return $column;
}
add_filter( 'manage_users_columns', 'add_user_columns' );

//add the data
function add_user_column_data( $val, $column_name, $user_id ) {
    $user = get_userdata($user_id);

    switch ($column_name) {
        case '_user_account_status' :
            return $user->_user_account_status;
            break;
        default:
    }
    return;
}
add_filter( 'manage_users_custom_column', 'add_user_column_data', 10, 3 );