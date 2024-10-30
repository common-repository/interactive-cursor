(function($) {

    $(document).ready(function() {

        const cursor = document.querySelector('.cursor');

        document.addEventListener('mousemove', e => {
           cursor.setAttribute('style', `top:  ${e.pageY - 25}px; left: ${e.pageX - 25}px;`);
        });
     
        document.addEventListener('click', () => {      
           cursor.classList.add('cursor--expand');        
           setTimeout(() => {
              cursor.classList.remove('cursor--expand');
           }, 500);
        });

    })

})(jQuery);