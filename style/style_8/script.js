(function($) {

    $(document).ready(function() {

      const cursor = document.querySelector('.cursor');
      const cursor_box = cursor.getBoundingClientRect();
      const cursor__inner = document.querySelector('.cursor__inner');
      const links = document.querySelectorAll('.link');
      const baseFrequency = document.querySelector('#feTurbulence');
      
      /**Get grow time */
      const time = 200, // time of animation
          speed = 4, // 4ms for 1 step 
          target = 40,// distance new radius and old r old
          step = (speed * target) / time;// 
      
      /* set position of cursor */
      const edit_position_of_cursor = function (e) {
          const { clientX: x, clientY: y } = e,
              { width: width, height: height } = cursor_box;
          cursor.style.transform = `translate(${x - width / 2}px, ${y - height / 2}px)`;
      }
      /*Set size radius*/
      let t1;
      const increase_size = () => t1 = setInterval(() => {
          let r = cursor__inner.getAttribute('r') * 1.0;
          cursor__inner.setAttribute('r', `${r = r + step}`);
          if (r > 100) clearInterval(t1);
      }, .1);
      
      let t2;
      const decrease_size = () => t2 = setInterval(() => {
          let r = cursor__inner.getAttribute('r') * 1.0;
          cursor__inner.setAttribute('r', `${r = r - step}`);
          if (r < 60) clearInterval(t2);
      }, .1);
      
      /* Animation when mouse over */
      let t3,
          frequency = 0.15,
          frequency_step = 0.002;
      const animationIn = () => {
          cursor__inner.setAttribute('style', 'filter: url(#filter-1);');
          baseFrequency.setAttribute('baseFrequency', `${frequency}`);
          let frequency_current = baseFrequency.getAttribute('baseFrequency') * 1.0;
          t3 = setInterval(() => {
              frequency_current = frequency_current - frequency_step;
              baseFrequency.setAttribute('baseFrequency', `${frequency_current}`);
              if (frequency_current < 0) {
                  clearInterval(t3);
                  baseFrequency.setAttribute('baseFrequency', 0);
                  cursor__inner.setAttribute('style', 'filter: none; opacity: 1;');
              }
          }, .1)
      }
      
      let t4;
      /* Animation when mouse leave */
      const animationOut = () => {
          cursor__inner.setAttribute('style', 'filter: url(#filter-1);');
          baseFrequency.setAttribute('baseFrequency', frequency);
          let frequency_current = baseFrequency.getAttribute('baseFrequency') * 1.0;
          t4 = setInterval(() => {
              frequency_current = frequency_current - frequency_step;
              baseFrequency.setAttribute('baseFrequency', `${frequency_current}`);
              if (frequency_current < 0) {
                  clearInterval(t4);
                  baseFrequency.setAttribute('baseFrequency', 0);
                  cursor__inner.setAttribute('style', 'filter: none; opacity: 1;');
              }
          }, 4)
      
      }
      
      const animateit = function (e) {
          if (e.type === 'mouseover') {
              increase_size();
              animationIn();
              clearInterval(t4);
              clearInterval(t2);
          }
          if (e.type === 'mouseleave') {
              decrease_size();
              animationOut();
              clearInterval(t1);
              clearInterval(t3);
          }
      }
      
      /**/
      window.addEventListener('mousemove', edit_position_of_cursor);
      window.addEventListener('mouseover', () => cursor__inner.style.opacity = 1);
      links.forEach(link => link.addEventListener('mouseover', animateit));
      links.forEach(link => link.addEventListener('mouseleave', animateit));
      

    })

})(jQuery);