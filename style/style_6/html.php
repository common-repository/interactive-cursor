<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>

<?php 
    $options = get_option( 'nurency_cursor' );
    $color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<style>
.cursor2{
    <?php echo esc_attr($color);?>
}
.cursor2, .cursor3{
    <?php echo esc_attr($height);?> 
}
</style>
