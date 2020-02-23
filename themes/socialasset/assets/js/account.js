(function($) {
$('div.fl-tabs button').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('div.fl-tabs button').removeClass('current');
    $('.fl-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
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

//on keypress 
$('#confpass').keyup(function(e){
  //get values 
  var pass = $('#newpass').val();
  var confpass = $(this).val();
  
  //check the strings
  if(pass == confpass){
    //if both are same remove the error and allow to submit
    $('.error').text('');
    allowsubmit = true;
  }else{
    //if not matching show error and not allow to submit
    $('.error').text('Password not matching');
    allowsubmit = false;
  }
});

//jquery form submit
$('#change_pass_form').submit(function(){

  var pass = $('#newpass').val();
  var confpass = $('#confpass').val();

  //just to make sure once again during submit
  //if both are true then only allow submit
  if(pass == confpass){
    allowsubmit = true;
  }
  if(allowsubmit){
    return true;
  }else{
    return false;
  }
});


$('input[type="checkbox"]').change(function(){
    this.value = (Number(this.checked));
});


})(jQuery);