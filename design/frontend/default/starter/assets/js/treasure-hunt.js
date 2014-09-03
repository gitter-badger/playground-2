$(document).ready(function()
{
  $('#play').modal({
  	show: true,
  	backdrop: false
  });

  $( window ).resize(function() {
    if($('.imgHunt-wrapper').size() > 0 && $('.imgHunt-wrapper').width() <= 745) {
      $('.imgHunt-wrapper').height($('body').width());
    }else {
      $('.imgHunt-wrapper').height('auto');
    }
  });
  if($('.imgHunt-wrapper').size() > 0 && $('.imgHunt-wrapper').width() <= 745) {
    $('.imgHunt-wrapper').height($('body').width());
  }

  $('#start-game').click(function(e) {
    var isSearching = false;

    e.preventDefault();

    $("#imgPreHunt").hide();
    $("#imgHunt").show();

    $('#play').modal('hide');
    $(".spiderman-only").hide();

    if($("#imgHunt").size() > 0) {

      var $footer = $(".bg-footer-game");

      $footer.show();

      $('#lose').on('hidden.bs.modal', function () {
          $footer.show();
      });

      $("#imgHunt").click(function(e) {
        if(!isSearching) {
          isSearching = true;
          var offset_t = $(this).offset().top - $(window).scrollTop();
          var offset_l = $(this).offset().left - $(window).scrollLeft();
          
          var x = Math.round( (e.clientX - offset_l) );
          var y = Math.round( (e.clientY - offset_t) );
          
          $.ajax({
          type:"POST",
          url: window.location.href,
          data: { 
                'x': x, 
                'y': y
            },
            dataType: 'json',
            success: function(msg) {
              isSearching = false;
              
              $footer.hide();
            $(".spiderman-only").hide();

              if (msg.success) {
                $('#btn-success').attr('href', msg.url);
                
                $('#win').modal({
                  show: true,
                  backdrop: false
                });

              }else {
                $('#lose').modal({
                  show: true,
                  backdrop: false
                });
              }
            }
          });
        }
      });
    }
  });
});