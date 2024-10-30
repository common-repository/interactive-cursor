(function($) {

    $(document).ready(function() {

        $("body").mousemove(function(e){
            var mouse = $(".mouse");
            // Add the mouse position to new cursor and followers
            mouse.css({
                left: e.pageX,
                top: e.pageY,
                opacity: 1, // show the cursor only when move mouse
            });
        });
        
        // Hover
        $("a").hover(function(){
            // Add class to cursor and followers on hover
            $(".mouse").toggleClass("hover");
        });
        
    })

})(jQuery);