<div class="mouse cursor"></div>
<!-- 2. Followers -->
<div class="mouse follow-cursor first"></div>
<div class="mouse follow-cursor second"></div>
<div class="mouse follow-cursor third"></div>
<div class="mouse follow-cursor fourth"></div>
<div class="mouse follow-cursor fifth"></div> 
<?php 
    $options = get_option( 'nurency_cursor' );
    $bg = $options['primary_color'] ? 'background:'.$options['primary_color'].';' : '';
    $border_color = $options['primary_color'] ? 'border-color:'.$options['primary_color'].';' : '';
    $height = $options['width_height'] ? 'width:'.$options['width_height'].'px;height:'.$options['width_height'].'px' : '';
?>

<style> 
.cursor,.mouse{
    <?php echo esc_attr($bg);?>
}
.follow-cursor.hover{
    <?php echo esc_attr($border_color.$height);?>
}
</style>