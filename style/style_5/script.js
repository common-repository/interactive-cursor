(function($) {

    $(document).ready(function() {

      const cursor = document.querySelector(".cursor");

      document.addEventListener("mousemove", e => {
        cursor.setAttribute("style", `left:${e.pageX -10}px;top:${e.pageY - 10}px;`);
      });
      
      document.addEventListener("click",()=>{
        cursor.classList.add("expand");
        setTimeout(()=>{
          cursor.classList.remove("expand");
        },500);
      });

    })

})(jQuery);