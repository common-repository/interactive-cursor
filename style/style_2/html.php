<div id="cursor">
    <div id="circle"></div>
  </div>
  <div id="cursorzwei">
    <div id="circlezwei"></div>
  </div>
<div id="cursorvanilla">
    <div id="circlecursorvanilla"></div>
</div>

<?php 
    $options = get_option( 'nurency_cursor' );
    $bg = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
    $border_color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<style>
#circlezwei{
    <?php echo esc_attr($bg);?>
}
#cursor,#cursorzwei,#cursorvanilla{
    <?php echo esc_attr($border_color.$height);?>
}
</style>
