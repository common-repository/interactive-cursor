<?php 
    $options = get_option( 'nurency_cursor' );
    echo '<span class="cursor"></span><span class="cursor-outline"></span>';
    $color = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>
<style>
.cursor-outline{
    <?php echo esc_attr($color);?>
}
.cursor-outline,.cursor{
    <?php echo esc_attr($height);?>
}
</style>
