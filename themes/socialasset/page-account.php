<?php 
/*
  Template Name: Account
*/
  get_header();
?>

<div class="content-center-cntlr gray-bg">
  <span class="fl-login-clip"><img src="<?php echo THEME_URI; ?>/assets/images/form-clip.png"></span>
  <section class="fl-login">
    <div class="login-form-cntlr clearfix">
      <div class="login-form-lft-col">

        <div class="fl-login-form">
          <span id="success-signup" class="success-signup"></span>
          <div id="after-signup-hide">
            <div class="fl-tabs clearfix text-center">
              <button class="tab-link current" data-tab="tab-1"><span>REGISTER</span></button>
              <button class="tab-link" data-tab="tab-2"><span>Log in</span></button>
            </div>
            <div id="tab-1" class="fl-tab-content current">
              <div class="tab-con-inr">
                <form id="user-signup" onsubmit="SubmitSignupFormData(); return false">
                  <input type="hidden" name="action" value="ngo_user_create_account">
                  <div class="register-hdr-con">
                    <strong>Create your free online account</strong>
                    <span>Already have an account? <a href="#">Sign in here</a></span>
                  </div>
                  <div class="register-type-btn">
                    <a href="javascript:void(0)" class="register-ngo-btn">
                      I’m NGO - <span>BeSupported</span>
                    </a>
                    <a href="javascript:void(0)" class="register-supporter-btn">I’m Supporter</a>
                  </div>
                  <div class="register-type-con">
                      <div class="register-type-select">
                        <div class="sa-selctpicker-ctlr">
                          <select name="usertype" class="selectpicker" id="user-type-selection">
                              <option selected="" value="Ngo">I am a NGO</option>
                              <option selected="" value="User">I’m Supporter</option>
                          </select>
                        </div>
                      </div>
                      <div class="fl-input-field-row sa-input ngo-name showCntrl" id="showNgo">
                        <label>NGO Name *</label>
                        <input type="text" name="ngo_name" placeholder="Example Co.">
                        <span class="ngo_error error-msg"></span>
                      </div>
                      <div class="fl-input-field-row sa-input user-name showCntrl" id="showUser">
                        <label>Your Name *</label>
                        <input type="text" name="your_name" placeholder="Your Name">
                        <span class="name_error error-msg"></span>
                      </div>
                      <div class="fl-input-field-row sa-input">
                        <label>Email *</label>
                        <input type="email" name="email" placeholder="Your Email">
                        <span class="email_error error-msg"></span>
                      </div>
                      <div class="fl-input-field-row-grd clearfix">
                        <div class="fl-input-field-row sa-input">
                          <label>Create a password *</label>
                          <input type="password" name="user_password" id="password" placeholder="Password">
                          <span class="pass_error error-msg"></span>
                        </div>
                        <div class="fl-input-field-row sa-input">
                          <label>Confirm password *</label>
                          <input type="password" name="confirm_password" id="confirm_password" placeholder="Password">
                          <span class="conpass_error error-msg"></span>
                        </div>
                        <span class="pass_match_error error-msg"></span>
                      </div>
                      <div class="agree-checkmark">
                        <div class="filter-check-row clearfix">
                          <input type="checkbox" id="agree" name="agree" value="yes" required="required">
                          <span class="checkmark"></span> 
                          <label for="agree"> I have read & agree to Terms of Service</label>
                        </div>
                      </div>
                      <div class="fl-submit-btn w-full">
                        <input type="hidden" name="user_ngo_register_nonce" value="<?php echo wp_create_nonce('user-ngo-register-nonce'); ?>"/>
                        <input type="submit" id="usersignup" value="Create Account">
                      </div>
                      <div class="fl-or-text">
                        <span>Or</span>
                      </div>
                      <div class="fl-sign-in-another">
                        <a class="gogle-login-btn" href="#">
                          <i class="fab fa-google"></i>
                          Sign In with Google
                        </a>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
            <div id="tab-2" class="fl-tab-content">
              <div class="tab-con-inr">
                <div class="login-form">
                  <span id="loginerror" class="login-error"></span>
                  <span id="success-login" class="success-login"></span>
                  <form id="user-login" onsubmit="SubmitLoginFormData(); return false">
                    <input type="hidden" name="action" value="ngo_user_login_account">
                    <div class="fl-input-field-row sa-input">
                      <label>Email *</label>
                      <input type="email" name="email" id="login_user" placeholder="Your Email">
                      <span class="loginemail_error error-msg"></span>
                    </div>
                    <div class="fl-input-field-row sa-input">
                      <label>Password *</label>
                      <input type="password" name="password" id="login-password" placeholder="Password">
                      <span class="loginpass_error error-msg"></span>
                    </div>
                    <div class="fl-forget-row">
                      <a href="#">Forgot your password?</a>
                    </div>
                    <div class="fl-submit-btn w-full">
                      <input type="hidden" name="user_ngo_login_nonce" value="<?php echo wp_create_nonce('user-ngo-login-nonce'); ?>"/>
                      <input type="submit" value="Sign In">
                    </div>
                    <div class="fl-or-text">
                      <span>Or</span>
                    </div>
                    <div class="fl-sign-in-another">
                      <a class="gogle-login-btn" href="#">
                        <i class="fab fa-google"></i>
                        Sign In with Google
                      </a>
                      <a class="facebook-login-btn" href="#">
                        <i class="fab fa-facebook-square"></i>
                        Sign In with Facebook
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="login-page-rgt-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/login-page-rgt-fea-img.png);">
        
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
