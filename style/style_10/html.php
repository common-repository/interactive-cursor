<?php 
    $options = get_option( 'nurency_cursor' );
    echo '<div class="cursor"></div><div class="sparkle"></div>';
    $color = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
?>
<style>
blackhole{
    <?php echo esc_attr($color);?>
}
</style>
