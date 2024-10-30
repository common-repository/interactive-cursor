(function($) {

    $(document).ready(function() {

        $("body").append("<div class='cursor style-two custom-cursor'><span class='small-cursor abs-center'></span><span class='big-cursor abs-center'></span></div>");
        var cursor = document.querySelector('.cursor');
        var span = document.querySelector('span');

        document.addEventListener('mousemove', (e) => {
            var x = e.clientX;
            var y = e.clientY;
            cursor.style.top = y + 'px';
            cursor.style.left = x + 'px';
            cursor.css('transform', 'translate('+ x +'px, '+ y +'px)');
        });

        $('a').each(function(){

         $(this).hover(function () {
            $('.cursor').toggleClass("hovered");
         });

        });
    })

})(jQuery);