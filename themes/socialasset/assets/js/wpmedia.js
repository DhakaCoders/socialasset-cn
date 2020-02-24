jQuery(document).ready( function($){
  if($('#choose-file').length){
      var logoMediaUploader;
    $('#choose-file').on('click', function(e){
       e.preventDefault();
        if(logoMediaUploader){
            logoMediaUploader.open();
            return;
        }
        
        logoMediaUploader = wp.media.frames.file_frame = wp.media({
           title: 'Choose a Profile Image',
           button: {
             text: 'Choose Image'  
           },
            multiple: false
        });
        
        logoMediaUploader.on('select', function(){
          attachment = logoMediaUploader.state().get('selection').first().toJSON(); 
          console.log(attachment.id);
          $('#_profile_logo_id').val(attachment.id);
          //$('#profile-picture-priview').css('background-image', 'url(' + attachment.url + ')');
          $('#profile-priview').html($('<img>',{id:'set-post-thumb',src:attachment.url}));
        })
        
        logoMediaUploader.open();
    });
  }

    if($('#featured_image').length){
      var mediaUploader; 
    $('#featured_image').on('click', function(e){
       e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }
        
        mediaUploader = wp.media.frames.file_frame = wp.media({
           title: 'Choose a Featured Image',
           button: {
             text: 'Choose Image'  
           },
            multiple: false
        });
        
        mediaUploader.on('select', function(){
           mattachment = mediaUploader.state().get('selection').first().toJSON(); 
        $('#_featured_picture').val(mattachment.id);
        //$('#profile-picture-priview').css('background-image', 'url(' + attachment.url + ')');
        $('#featured-picture-priview').prepend($('<img>',{id:'set-post-thumb',src:mattachment.url}));
        })
        
        mediaUploader.open();
    });
  }

  if($('#campaign_gallery').length){
    var multiMediaUploader; 
      // multiple image selection for gallery
      $('#campaign_gallery').on('click', function(e){
         e.preventDefault();
          if(multiMediaUploader){
              multiMediaUploader.open();
              return;
          }
          
          multiMediaUploader = wp.media.frames.file_frame = wp.media({
             title: 'Choose a Gallery Images',
             button: {
               text: 'Choose Images'  
             },
              multiple: true
          });
          
          multiMediaUploader.on('select', function(){

              var attachments = multiMediaUploader.state().get('selection').map( 

                  function( attachment ) {

                      attachment.toJSON();
                      return attachment;

              });

              //loop through the array and do things with each attachment

             var i;

             for (i = 0; i < attachments.length; i++) {
              console.log(attachments[i].id);

                  //sample function 1: add image preview
                  $('#myplugin-placeholder').prepend('<li id="myplugin-image-li' + 
                    attachments[i].id +'"><div class="ncc-campaign-gallery-add-img"><img src="' + 
                    attachments[i].attributes.url + '" ><input id="myplugin-image-input' + 
                    attachments[i].id +'" type="hidden" name="attachment_id_array[]"  value="' + 
                    attachments[i].id + '"><div class="removeGallery" onclick="DeleteGalleryImage('+attachments[i].id+'); return false"><i class="fa fa-trash"></i></div></div></li>');

              }
          })
          
          multiMediaUploader.open();
      });
    }

});

function DeleteGalleryImage(id){
      var answer = confirm("Are you sure you want to remove gallery image?");
      if( answer == true ){
        console.log(id);
        jQuery('#myplugin-image-li'+id).remove('#myplugin-image-li'+id);
      }
      return;
}