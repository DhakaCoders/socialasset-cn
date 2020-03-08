<?php 
$index = '_show_my_profile';
if( isset($umetas[$index]) && $umetas[$index] != 'true') return;
?>
<div id="tab-1" class="">
  <div class="tab-con-inr xs-center-width">
    <?php 
      if( isset($umetas['_user_account_status']) && !empty($umetas['_user_account_status']) ){
        if($umetas['_user_account_status'] == 'draft'){
    ?>
    <div class="profile-is-draft">
      <p><strong>Your profile is DRAFT</strong>   Lorem ipsum donor sit met.</p>
      <i class="fas fa-times"></i>
    </div>
    <?php } }?>

    <?php 
      if(isset($msg) && array_key_exists("error",$msg)){ 
        printf('<div class="profile-is-draft"><p><strong>%s</strong></p><i class="fas fa-times"></i></div>', $msg['error']);
      }
      if(isset($msg) && array_key_exists("success",$msg)){ 
        printf('<div class="action-success"><p><strong>%s</strong></p><i class="fas fa-times"></i></div>', $msg['success']);
      }
    ?>
    <div class="tab-con-title">
      <strong>Account Details</strong>
    </div>
    
      <div class="clearfix tab-con-col-row">
        <form action="" method="post">
        <div class="tab-con-col-4">
          <div class="has-bx-shadow profile-basic-info-bx-cntlr text-center">
            
            <div class="profile-edit-step-1 profile-img-step-1">
              <div class="profile-img branding-logo" id="profile-priview">
                <?php 
                if( isset($umetas['_profile_logo_id']) && !empty($umetas['_profile_logo_id']) ){
                  echo get_user_profile_logo_tag($umetas['_profile_logo_id']); 
                }
                ?>
              </div>
              <input type="hidden" id="_profile_logo_id" name="_profile_logo_id" value="">
              <div class="profile-img-edit">
                <input type="button" name="" value="" id="choose-file">
                <label for="choose-file">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/plus-icon-2.png"></i>
                  <span class="file-up-instruction-txt">CLICK TO ADD<br> YOUR LOGO</span>
                </label>
              </div>

            </div>


            <div class="profileInfo">
            <?php 
            $ngoname = '';
            if( isset($umetas['_ngo_name']) && !empty($umetas['_ngo_name']) ){
              printf('<strong>%s</strong>', $umetas['_ngo_name']);
              $ngoname = $umetas['_ngo_name'];
            }
            ?>
            <?php if(isset($user->user_email) && !empty($user->user_email)): ?>
            <span style="display: block;"><?php echo $user->user_email; ?></span>
            <?php endif;?>
            <?php 
            if( isset($umetas['_user_account_status']) && !empty($umetas['_user_account_status']) ){
              if($umetas['_user_account_status'] == 'draft'){
                printf('<span class="status-published-title color-red">STATUS: %s</span>', $umetas['_user_account_status']);
              }else{
                printf('<span class="status-published-title">STATUS: %s</span>', $umetas['_user_account_status']);
              }
            }
            ?>
           </div>
            <div class="plr-30 profile-edit-step-2 profileFieldUpdate">
                <div class="fl-input-field-row clearfix sa-input text-left username-filed">
                <label>Username</label>
                <input id="get_username" type="text" name="_ngo_name" value="<?php echo $ngoname; ?>">
              </div>
              <div class="fl-input-field-row clearfix sa-input text-left username-filed">
                <label>About Your NGO</label>
                <textarea name="_about_ngo" placeholder="Type a brief about your NGO"><?php if( isset($umetas['_about_ngo']) && !empty($umetas['_about_ngo']) ){
                    printf('%s', $umetas['_about_ngo']);
                  }?></textarea>
              </div>
            </div>
            <div style="height: 1px"></div>
            <hr class="clearfix">
            <div class="plr-30">
              <div class="profile-submit-btn profile-edit-step-1 flx-btn-center">
                <!-- <input type="submit" name="" value="Edit Profile"> -->
                <a class="edit-profile-btn" href="javascript:void(0)">Edit Profile</a>
              </div>
              <input type="hidden" name="user_change_profile_image_nonce" value="<?php echo wp_create_nonce('user-change-profile-image-nonce'); ?>"/>
              <div class="profile-submit-btn profile-edit-step-2 flx-btn-center clearfix">
                
                <input type="submit" name="save_profile_logo" value="Save Changes">
                <!-- <input id="edit-profile-cancle-btn" type="reset" name="" value="Cancel"> -->
                <a href="javascript:void(0)" id="edit-profile-cancle-btn" href="#">Cancel</a>
              </div>
            </div>
          </div>
        </div>
        </form>
        <div class="tab-con-col-8">
          <div class="has-bx-shadow profile-rgt-info-bx-cntlr">
            <strong class="profile-rgt-info-bx-title prib-plr">Change Password</strong>
            <form action="" method="post" id="change_pass_form">
            <div class="prib-plr profile-rgt-info-bx-input-fields">
              <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                <label>Current Password</label>
                <input type="password" name="currnt_pass" required="required">
              </div>
            </div>
            <div class="prib-plr profile-rgt-info-bx-input-fields">
              <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                <label>New Password</label>
                <input type="password" name="new_pass" id="newpass" required="required"> 
              </div>
            </div>
            <div class="prib-plr profile-rgt-info-bx-input-fields">
              <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                <label>Confirm New Password</label>
                <input type="password" name="confpass" id="confpass" required="required">
              </div>
              <div class="pass-error-new">
                <span class="error" style="color:red;display: block;"></span>
              </div>
            </div>
            <div class="fl-forget-row prib-plr">
              <a class="fl-forget-pass-btn" href="#">Forgot your password?</a>
            </div>
            <div class="prib-plr forgot-pass-field-before">
              <div class="prib-btns profile-submit-btn clearfix">
                <input type="hidden" name="user_change_password_nonce" value="<?php echo wp_create_nonce('user-change-password-nonce'); ?>"/>
                <input type="submit" name="change_pass" value="Change Password">
                <input type="reset" name="" value="Cancel">
              </div>
            </div>
            </form>
            <form id="forgotpass" onsubmit="SubmitForgotPass(); return false">
            <input type="hidden" name="action" value="user_forgot_password">
            <div class="prib-plr forgot-pass-field-after">
              <div class="prib-btns">
                <div class="sa-input">
                  <span class="useremail error-msg" style="display: none;"></span>
                  <span id="generatedSuccess" class="success-login" style="display: none;"></span>
                  <input type="email" name="useremail" id="useremail" placeholder="Enter your email">
                </div>
                <div class="profile-submit-btn clearfix">
                  <input type="hidden" name="user_forgot_pass_nonce" value="<?php echo wp_create_nonce('user-forgot-pass-nonce'); ?>"/>
                  <input type="submit" name="forgotpass" value="Send">
                </div>
              </div>
            </div>
            </form>
            <hr>
            <strong class="profile-rgt-info-bx-title prib-plr">Notification Settings</strong>
            <form action="" method="post">
            <div class="switch-checkbox-con prib-plr">
              <?php 
                $newsl_check = $umetas['_get_newsletters'];
              ?>
              <div class="switch-item">
                <div class="switch-checkbox">
                  <input type="checkbox" name="_get_newsletters" id="checkbox-switch2"  value="<?php echo ($newsl_check == 1)? $newsl_check: '0';?>">
                  <span class="checkbox-slider"></span>
                </div>
                <label for="checkbox-switch2">Newsletters</label>
              </div>
            </div>
            <div style="height: 15px;"></div>
            <hr>
            <div class="prib-plr">
              <div class="profile-submit-btn submit-btn-lrg profile-submit-btn-center clearfix">
                <input type="hidden" name="user_notification_settings_nonce" value="<?php echo wp_create_nonce('user-notification-settings-nonce'); ?>"/>
                <input type="submit" name="notification_settings" value="SUBMIT">
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>