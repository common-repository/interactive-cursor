<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2">					
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
    </div>
<div class='cursor3' id="cursor3"></div>

<?php
$options = get_option( 'nurency_cursor' );
$color = $options['primary_color'] ? 'stroke:'.$options['primary_color'].';' : '';
?>
<style>
.progress-wrap svg.progress-circle path{
    <?php echo esc_attr($color);?>
}
</style>