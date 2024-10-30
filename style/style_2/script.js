(function($) {

    $(document).ready(function() {

$(document).on('mousemove', function(e){
    $('#cursor').css({
      left:  e.pageX,
      top:   e.pageY
    });
    
    $('#cursorzwei').css({
      left:  e.pageX,
      top:   e.pageY
    });
});

// vanilla
var bodyElement =  document.querySelector('body'),
cursor = document.querySelector('#cursorvanilla');

bodyElement.addEventListener('mousemove', HoleKoordinaten);

function HoleKoordinaten(e) {
  x = e.clientX;
  y = e.clientY;
  cursor.style.left = x + 'px' ;
  cursor.style.top = y + 'px';
}

})

})(jQuery);