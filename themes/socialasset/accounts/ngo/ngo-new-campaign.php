<div id="tab-3" class="">
  <div class="tab-con-inr">
    <div class="ngo-create-campaign-con">
      <div class="ngo-create-campaign-con-des-hdr">
        <p>Fill the following steps and create a new Campaign!</p>
      </div>
      <?php 
      if(isset($msg) && array_key_exists("error",$msg)){ 
        printf('<div class="profile-is-draft"><p><strong>%s</strong></p><i class="fas fa-times"></i></div>', $msg['error']);
      }
      if(isset($msg) && array_key_exists("success",$msg)){ 
        printf('<div class="profile-is-draft"><p><strong>%s</strong></p><i class="fas fa-times"></i></div>', $msg['success']);
      }
    ?>
      <form action="" method="post">
        <div class="width-425">
          <div class="ncc-input-fields-row ncc-input-title-fields-row">
            <label>Title</label>
            <input type="text" name="post_title" placeholder="Type a Title here" required="required">
          </div>
          <div class="ncc-input-fields-row">
            <div class="sa-selctpicker-ctlr">
              <?php get_custom_post_taxnomy_dropdown('campaign'); ?>
            </div>
          </div>
          <div class="ncc-input-fields-row  ncc-input-fields-row-col clearfix">
            <label>Date</label>
            <div class="ncc-input-fields-col">
              <div class="date-field">
                <label>From:</label>
                <div class="date-input">
                  <input type="text" name="fromt_date" id="datepicker2" required="required">
                  <img src="<?php echo THEME_URI; ?>/assets/images/calender.png">
                </div>
              </div>
            </div>
            <div class="ncc-input-fields-col">
              <div class="date-field">
                <label>To:</label>
                <div class="date-input">
                  <input type="text" name="to_date" id="datepicker3" required="required">
                  <img src="<?php echo THEME_URI; ?>/assets/images/calender.png">
                </div>
              </div>
            </div>
          </div>
          <div class="ncc-input-fields-row ngo-upload-cover-photo">
            <div class="ngo-upload-cover-photo-inr">
              <div id="featured_image">
              <span>Upload a cover Image</span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/plus-black.png"></i>
              </div>
              <input type="hidden" id="_featured_picture" name="_thumbnail_id" value="">
              <div id="featured-picture-priview" class="featured-picture clearfix"></div>
            </div>
          </div>
          <div class="ncc-campaign-gallery">
            <label><strong>Campaign Gallery</strong> (Upload more images and videos)</label>
            <div class="ncc-campaign-gallery-list" >
              <ul class="ulc clearfix" id="myplugin-placeholder">
                <li>
                  <div class="ncc-campaign-gallery-add-img" id="campaign_gallery">
                    <!-- <input type="file" name="campaign_gallery"> -->
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/plus-black.png"></i>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="pr-190">
          <div class="ncc-text-editor">
            <label>Text</label>
              <div>
                <!-- <textarea style="min-height: 640px; background: #fff; border-radius: 6px; background: #fff; width: 100%; border: none;"></textarea> -->
                <?php get_custom_content_editor('capmaign_content'); ?> 
              </div>
          </div>
          <div class="ncc-add-tag">
            <label>Add Tags</label>
            <div>
              <input type="text" name="campaign_tags" id="singleFieldTags2" value="" placeholder="Add comma between tags. (e.g: sea, turtle, pollution)">
            </div>
          </div>
          <input type="hidden" name="ngo_add_campaign_nonce" value="<?php echo wp_create_nonce('ngo-add-campaign-nonce'); ?>"/>
          <div class="ncc-submit-btns">
            <button>PREVIEW</button>
            <input type="submit" name="add_campaign" value="Submit">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>