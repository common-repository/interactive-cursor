<?php 
    $options = get_option( 'nurency_cursor' );
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<div id="cursor"></div>
<style>
#cursor{
    <?php echo esc_attr($height);?> 
}
</style>
