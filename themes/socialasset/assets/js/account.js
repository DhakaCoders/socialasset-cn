$('div.fl-tabs button').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('div.fl-tabs button').removeClass('current');
    $('.fl-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
});


$('.login-btn').on('click', function(){
  $(this).toggleClass('login-btn-expend');
  $('.login-btn ul').slideToggle(300);
});

$('.hdr-login-profile').on('click', function(){
  $(this).toggleClass('login-btn-expend');
  $('.hdr-login-profile ul').slideToggle(300);
});

$('.register-type-btn a').on('click', function(){
  $('.register-type-con').show();
  $('.register-type-btn').hide();
});

$('.profile-submit-btn a').on('click', function(){
  $('.register-type-con').show();
  $('.register-type-btn').hide();
});


$('.edit-profile-btn').on('click', function(){
  $('.profile-edit-step-1').hide();
  $('.profile-edit-step-2').show();
});

$('#edit-profile-cancle-btn').on('click', function(){
  $('.profile-edit-step-1').show();
  $('.profile-edit-step-2').hide();
});

if( $('#datepicker').length ){
  $('#datepicker').datepicker();
}
if( $('#datepicker2').length ){
  $('#datepicker2').datepicker();
}
if( $('#datepicker3').length ){
  $('#datepicker3').datepicker();
}


$('.register-ngo-btn').on('click', function(){
  $('.ngo-name').show();
  $('.user-name').hide();
});

$('.register-supporter-btn').on('click', function(){
  $('.ngo-name').hide();
  $('.user-name').show();
});

$('#user-type-selection').on('change', function(){
  var userValue = $(this).val(); 
    $("div.showCntrl").hide();
    $("#show"+userValue).show();
});

$('#user-type-selection').on('change', function(){
  var userTypeValue = $(this).val(); 
  $("div.showCntrl").hide();
  $("#show"+userTypeValue).show();
  //alert('hello');
});


$('.register-ngo-btn').on('change', function(){
    $('#user-type-selection option[value=Ngo]').attr('selected','selected');  
});

$('.register-supporter-btn').on('change', function(){ 
    $('#user-type-selection option[value=User]').attr('selected','selected'); 
});