<?php

add_action( 'show_user_profile', 'my_custom_user_profile_field' );
add_action( 'edit_user_profile', 'my_custom_user_profile_field' );
function my_custom_user_profile_field( $user ) { 
	$status = get_the_author_meta( '_user_account_status', $user->ID );
?>
    <h3>User Status: </h3>
    <table class="form-table">
        <tr>
            <th><label for="my-custom-user-profile-field">Account Status:</label></th>
            <td>
                <input type="checkbox" <?php echo (!empty($status) && $status == 'Active')? 'checked': ''; ?> name="_user_account_status" id="_user_account_status" value="Active"> Active
            </td>
        </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_my_custom_user_profile_field' );
add_action( 'edit_user_profile_update', 'save_my_custom_user_profile_field' );
function save_my_custom_user_profile_field( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    update_user_meta( absint( $user_id ), '_user_account_status', wp_kses_post( $_POST['_user_account_status'] ) );
}