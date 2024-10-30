<?php 
    $options = get_option( 'nurency_cursor' );
    echo '<div data-cursor="'.esc_attr($options['cursor_text']).'" class="rotating-cursor"></div>';
    $color = $options['primary_color'] ? 'color:'.$options['primary_color'].';' : '';
?>
<style>
#outerCircleText{
    <?php echo esc_attr($color);?>
}
</style>
 