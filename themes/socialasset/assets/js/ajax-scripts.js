function SubmitSignupFormData(){
    var error = false;
    var serialized = jQuery( '#user-signup' ).serialize()+ "&action = ngo_user_create_account";
    console.log(serialized);
    jQuery.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: ajax_user_signup_object.ajaxurl,
        data: serialized,
        success: function(data){
            if(typeof(data['user_status']) != "undefined" &&  data['user_status'].length != 0){
                jQuery('#user_email').val('');
                jQuery('#username').val('');
                jQuery('#password').val('');
                jQuery('.signup-modal-area').hide();
                jQuery('#user_success_msg').show();
            }else{
                if(typeof(data['email']) != "undefined" &&  data['email'].length != 0){
                    jQuery('.email_error').text(data['email']);
                    error = true;
                }
                if(typeof(data['username']) != "undefined" && data['username'].length != 0){
                    jQuery('.username_error').text(data['username']);
                    error = true;
                }
                if(typeof(data['signup_wrong']) != "undefined" && data['signup_wrong'].length != 0){
                    jQuery('.signup_error').html('<span class="signup_error error-msg">'+data['signup_wrong']+'</span>');
                    error = true;
                }

                if(error == true){
                    jQuery('#password').val('');
                }
            }
            // $('#login p.status').text(data.message);
            // if (data.loggedin == true){
            //     document.location.href = ajax_login_object.redirecturl;
            // }
        }
    });
}