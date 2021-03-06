jQuery(document).ready(function ($) {
  $('.clippy').clippy({clippy_path: clippy.url});

  $('.mepr-open-cancel-confirm').magnificPopup({
    type: 'inline',
    closeBtnInside: false
  });

  $('.mepr-confirm-no').on('click', function(e) {
    $.magnificPopup.close();
  });

  $('.mepr-confirm-yes').on('click', function(e){
    location.href = $(this).data('url');
  });

  $('.mepr-open-upgrade-popup').magnificPopup({
    type: 'inline',
    closeBtnInside: false
  });

  $('.mepr-upgrade-cancel').on('click', function(e) {
    $.magnificPopup.close();
  });

  $('.mepr-upgrade-buy-now').on('click', function(e){
    var url = $('.mepr-upgrade-dropdown').val();
    location.href = url;
  });
});
