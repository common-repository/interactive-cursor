<div class="inner__cursor"></div>
<div class="outer__cursor"></div>
<div class="outer__cursor2"></div>

<?php 
    $options = get_option( 'nurency_cursor' );
    $border = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $bg = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
?>

<style>
.inner__cursor{
    <?php echo esc_attr($bg);?>
}
.outer__cursor,.outer__cursor2{
    <?php echo esc_attr($border);?>
}
</style>
