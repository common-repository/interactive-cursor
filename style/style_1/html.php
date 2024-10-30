<div class="cursor"></div>
<div class="cursor2"></div>

<?php 
    $options = get_option( 'nurency_cursor' );
    $bg = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
    $border_color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<style>
.cursor2{
    <?php echo esc_attr($bg);?>
}
.cursor{
    <?php echo esc_attr($border_color.$height);?>
}
</style>

