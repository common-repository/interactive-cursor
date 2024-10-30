(function($) {

    $(document).ready(function() {

        let inner__cursor = document.querySelector(".inner__cursor");
        let outer__cursor = document.querySelector(".outer__cursor");
        let outer__cursor2 = document.querySelector(".outer__cursor2");
        
        document.onmousemove = function (e){
          inner__cursor.style.left = e.pageX - 5 + "px";
          inner__cursor.style.top = e.pageY - 5 + "px";
          inner__cursor.style.display = "block";
          
          outer__cursor2.style.left = e.pageX - 12 + "px";
          outer__cursor2.style.top = e.pageY - 12 + "px";
          outer__cursor2.style.display = "block";
          
          outer__cursor.style.left = e.pageX - 22 + "px";
          outer__cursor.style.top = e.pageY - 22 + "px";
          outer__cursor.style.display = "block";
        }

    })

})(jQuery);