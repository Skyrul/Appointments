function changeit()
{
  $('.increased.popover-toggle.silent.disabled').text('Cambell');
  $('.branding .badge').hide();
}

$(document).ready(function() {
    $('#btnscheddemo').on('mousedown', function() {
        var $content = $('.calendly-popup-content');
        var intervalId = setInterval(function(){
          changeit();
        }, 1000);
        $('.calendly-badge-content').click();      
    });    
});