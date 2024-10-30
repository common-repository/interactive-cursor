  <svg class="cursor" width="75" height="75" viewBox="0 0 140 140">
    <defs>
      <filter id="filter-1" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
        <feTurbulence type="fractalNoise" baseFrequency="0" numOctaves="10" result="warp"></feTurbulence>
        <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="60" in="SourceGraphic" in2="warp"></feDisplacementMap>
      </filter>
    </defs> 
    <circle class="cursor-circle" cx="70" cy="70" r="67"></circle>
  </svg>
  <?php 
    $options = get_option( 'nurency_cursor' );
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
  ?>
  <style>
  .cursor{
      <?php echo esc_attr($height);?> 
  }
  </style>


