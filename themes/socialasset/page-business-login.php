<?php 
/*
  Template Name: Business Login
*/
get_header();
?>
<div class="content-center-cntlr gray-bg">
  <span class="login-form-clip"><img src="<?php echo THEME_URI; ?>/assets/images/form-clip.png"></span>
  <section class="login-businesses">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="login-businesses-form-cntlr">
              <div class="login-businesses-form-hdr">
                <p>Ad a text here in order to describe what a business  lore ipsum door sit amen.</p>
              </div>
              <div class="login-businesses-form">
                <span id="bsuccess_signup" class="success-signup"></span>
                <div id="after-bsignup-hide">
                <div class="fl-tabs clearfix text-center">
                  <button class="tab-link" data-tab="tab-1"><span>REGISTER</span></button>
                  <button class="tab-link current" data-tab="tab-2"><span>Log in</span></button>
                </div>
                <div id="tab-1" class="fl-tab-content">
                  <div class="tab-con-inr">
                    <form id="business-signup" onsubmit="BusinessSubmitSignupFormData(); return false">
                      <input type="hidden" name="action" value="business_create_account">
                        <div class="fl-input-field-row sa-input">
                          <label>Email *</label>
                          <input type="email" name="email" id="business_email" placeholder="Your Email">
                          <span class="email_error error-msg"></span>
                        </div>
                        <div class="fl-input-field-row sa-input">
                          <label>Password *</label>
                          <input type="password" name="password" id="business_password" placeholder="Password">
                          <span class="pass_error error-msg"></span>
                        </div>
                        <div class="fl-submit-btn w-full">
                          <input type="hidden" name="business_register_nonce" value="<?php echo wp_create_nonce('business-register-nonce'); ?>"/>
                          <input type="submit" value="Sign In">
                        </div>
                        
                      </form>
                  </div>
                </div>
                <div id="tab-2" class="fl-tab-content current">
                  <div class="tab-con-inr">
                    <div class="login-form">
                      <span id="loginerror" class="login-error"></span>
                      <span id="success-login" class="success-login"></span>
                      <form id="business-login" onsubmit="BusinessSubmitLoginFormData(); return false">
                        <input type="hidden" name="action" value="business_login_account">
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
                          <input type="hidden" name="business_login_nonce" value="<?php echo wp_create_nonce('business-login-nonce'); ?>"/>
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
                          <a class="linkedin-login-btn" href="#">
                            <i class="fab fa-linkedin-in"></i>
                            Sign In with LinkedIn
                          </a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
</div>
<?php get_footer(); ?>