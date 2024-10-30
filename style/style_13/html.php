<?php 
    $options = get_option( 'nurency_cursor' );
    echo '<div class="cursor"><span></span></div>';
    $color = $options['primary_color'] ? 'background-color:'.$options['primary_color'].';' : '';
    $border_color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>
<style>
.cursor span{
    <?php echo esc_attr($color);?>
}
.cursor{
    <?php echo esc_attr($border_color);?>
}
</style>