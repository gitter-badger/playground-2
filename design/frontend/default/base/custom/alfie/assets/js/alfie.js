function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    $('.social-icon .instagram').show();
    if( navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
    ){
        $('.social-icon .insta a').attr("href", "instagram://camera")
    }else{
        $('.social-icon .insta a').attr("href", "http://www.instagram.com")
    }
  }
 else {
    $('.social-icon .instagram').hide();
  }
}

$( document ).ready(function() {
	detectmob();
	$('.insta').hide();
  var $item = $('.postvote-preview .item'),
      $img = $('.postvote-preview .img-responsive');
  if($img.size() > 0){
    $img.one("load", function() {
      var height = $img.height(),
          width = $img.width();
      
      if(width >= height){
        $item.height($item.width());
        $img.css({
          position: 'absolute',
          top: 0,
          left: 0,
          'max-width': '100000px',
          width: 'auto',
          height: '100%'
        });
        $img.css('margin-left', '-' + (($img.width() - $item.width()) * 0.5) + 'px');
      }
      else{
        $img.width("100%");
        $img.height("auto");
        $item.height($item.width());
        $img.css('margin-left', '0px');
        $img.css('margin-top', '-' + (($img.height() - $item.height()) * 0.5) + 'px');
      }
    }).each(function() {
      if(this.complete) $(this).load();
    });
    
  }

  $('.link.instagram').on('click',function(){
  	$('.social-select').hide();
  	$('.insta').show();
  })

});