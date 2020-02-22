<div class="content-center-cntlr gray-bg">
  <section class="ngo-profile-sec">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ngo-profile-sec-iner width-1115">
              <div class="user-profile-sec-tab">
                <div class="fl-tabs clearfix">
                  <button onclick="window.location.href = 'b_ngo-profile-01-my-account.html';"  class="tab-link current"><span>MY NGO’S PROFILE</span></button>
                  <button onclick="window.location.href = 'b_ngo-profile-02-campaings.html';"  class="tab-link"><span>MY CAMPAIGNS</span></button>
                  <button onclick="window.location.href = 'b_ngo-profile-03-create-campaing.html';"  class="tab-link"><span>CREATE A CAMPAIGN</span></button>
                </div>
              </div>
              <div id="tab-1" class="">
                <div class="tab-con-inr xs-center-width">
                  <div class="profile-is-draft">
                    <p><strong>Your profile is DRAFT</strong>   Lorem ipsum donor sit met.</p>
                    <i class="fas fa-times"></i>
                  </div>
                  <div class="tab-con-title">
                    <strong>Account Details</strong>
                  </div>
                  <form>
                    <div class="clearfix tab-con-col-row">
                      <div class="tab-con-col-4">
                        <div class="has-bx-shadow profile-basic-info-bx-cntlr text-center">
                          <div class="profile-edit-step-1 profile-img-step-1">
                            <div class="profile-img branding-logo">
                              <img src="<?php echo THEME_URI; ?>/assets/images/ngo-logo.png">
                            </div>
                          </div>
                          <div class="profile-edit-step-2 profile-img-step-2">
                            <div class="profile-img-edit">
                              <input type="file" name="" value="" id="choose-file">
                              <label for="choose-file">
                                <i><img src="<?php echo THEME_URI; ?>/assets/images/plus-icon-2.png"></i>
                                <span class="file-up-instruction-txt">CLICK TO ADD<br> YOUR LOGO</span>
                              </label>
                            </div>
                          </div>
                          <strong>ACTIONAID</strong>
                          <span style="display: block;">management@actionaid.gr</span>
                          <span class="status-published-title color-red profile-edit-step-1">STATUS: DRAFT</span>
                          <span class="status-published-title profile-edit-step-2">STATUS: PUBLISHED</span>

                          <div class="plr-30 profile-edit-step-2">
                              <div class="fl-input-field-row clearfix sa-input text-left username-filed">
                              <label>Username</label>
                              <input id="get_username" type="text" name="">
                            </div>
                            <div class="fl-input-field-row clearfix sa-input text-left username-filed">
                              <label>About Your NGO</label>
                              <textarea placeholder="Type a brief about your NGO"></textarea>
                            </div>
                          </div>
                          <div style="height: 1px"></div>
                          <hr class="clearfix">
                          <div class="plr-30">
                            <div class="profile-submit-btn profile-edit-step-1 flx-btn-center">
                              <!-- <input type="submit" name="" value="Edit Profile"> -->
                              <a class="edit-profile-btn" href="javascript:void(0)">Edit Profile</a>
                            </div>
                            <div class="profile-submit-btn profile-edit-step-2 flx-btn-center clearfix">
                              <input type="submit" name="" value="Save Changes">
                              <!-- <input id="edit-profile-cancle-btn" type="reset" name="" value="Cancel"> -->
                              <a href="javascript:void(0)" id="edit-profile-cancle-btn" href="#">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-con-col-8">
                        <div class="has-bx-shadow profile-rgt-info-bx-cntlr">
                          <strong class="profile-rgt-info-bx-title prib-plr">Change Password</strong>
                          <div class="prib-plr profile-rgt-info-bx-input-fields">
                            <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                              <label>Current Password</label>
                              <input type="password" name="">
                            </div>
                          </div>
                          <div class="prib-plr profile-rgt-info-bx-input-fields">
                            <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                              <label>New Password</label>
                              <input type="password" name="">
                            </div>
                          </div>
                          <div class="prib-plr profile-rgt-info-bx-input-fields">
                            <div class="sa-input clearfix pro-rgt-info-bx-input-fields-row">
                              <label>Confirm New Password</label>
                              <input type="password" name="">
                            </div>
                          </div>
                          <div class="fl-forget-row prib-plr">
                            <a href="#">Forgot your password?</a>
                          </div>
                          <div class="prib-plr">
                            <div class="prib-btns profile-submit-btn clearfix">
                              <input type="submit" name="" value="Change Password">
                              <input type="reset" name="" value="Cancel">
                            </div>
                          </div>
                          <hr>
                          <strong class="profile-rgt-info-bx-title prib-plr">Notification Settings</strong>
                          <div class="switch-checkbox-con prib-plr">
                            <div class="switch-item">
                              <div class="switch-checkbox">
                                <input type="checkbox" checked id="checkbox-switch1">
                                <span class="checkbox-slider"></span>
                              </div>
                              <label for="checkbox-switch1">I would like to receive notification through Email</label>
                            </div>
                            <div class="switch-item">
                              <div class="switch-checkbox">
                                <input type="checkbox" id="checkbox-switch2">
                                <span class="checkbox-slider"></span>
                              </div>
                              <label for="checkbox-switch2">Newsletters</label>
                            </div>
                            <div class="switch-item">
                              <div class="switch-checkbox">
                                <input type="checkbox" id="checkbox-switch3">
                                <span class="checkbox-slider"></span>
                              </div>
                              <label for="checkbox-switch3">Emails for new campaigns</label>
                            </div>
                            <div class="switch-item">
                              <div class="switch-checkbox">
                                <input type="checkbox" id="checkbox-switch4">
                                <span class="checkbox-slider"></span>
                              </div>
                              <label for="checkbox-switch4">Lorem ipsum</label>
                            </div>
                          </div>
                          <div style="height: 15px;"></div>
                          <hr>
                          <div class="prib-plr">
                            <div class="profile-submit-btn submit-btn-lrg profile-submit-btn-center clearfix">
                              <input type="submit" name="" value="SUBMIT">
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
</div>