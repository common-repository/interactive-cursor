<div class="cursor"></div>

<?php 
    $options = get_option( 'nurency_cursor' );
    $color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<style>
.cursor::after{
    <?php echo esc_attr($color);?>
}
.cursor{
    <?php echo esc_attr($height);?>
}
</style>
