<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
}

$cursor_style = apply_filters( 'nd_cursor_style',[

	'style_1'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/1.jpg',
 	'style_2'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/2.jpg',
	'style_3'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/3.jpg',
	'style_4'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/4.jpg',	
	'style_5'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/5.jpg',
	'style_6'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/6.jpg',
	'style_7'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/7.jpg',
	'style_8'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/8.jpg',
	'style_9'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/9.jpg',
	'style_10'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/10.jpg',
	'style_11'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/11.jpg',
	'style_12'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/12.jpg', 
	'style_13'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/3.jpg', 
	'style_14'  => NURENCY_CUSTOM_CURSOR_URL . 'admin/preview/4.jpg', 

]);

$prefix = 'nurency_cursor';
$pro_class = apply_filters( 'nd_cursor_pro_class', '<span class="pro">pro</span>');
CSF::createCustomizeOptions( $prefix );

CSF::createSection( $prefix, array(
	'title'    => __('Interactive Cursor','interactive-cursor'),
	'priority' => 1,
	'fields'   => array(

		array(
			'id'          => 'style',
			'type'        => 'image_select',
			'title'       => 'Style',
			'class'       => 'nd-cursor',
			'placeholder' => __('Select an option','interactive-cursor'),
			'options'     => $cursor_style,
			'default'   => 'style_2'
		),

		array(
		  'id'    => 'primary_color',
		  'type'  => 'color',
		  'class' => apply_filters( 'nd_cursor_free', 'cursor-free'),
		  'title' => 'Primary color'.$pro_class,
		  'default'   => '#ff2861',
		  'dependency' => array(
			array( 'style', '!=', 'style_7' ),
			array( 'style', '!=', 'style_8' ),
		  ),		  
		),

		array(
			'id'      => 'width_height',
			'type'    => 'slider',
			'title'   => __('Width & height','interactive-cursor'),
			'dependency' => array( 
			 array( 'style', '!=', 'style_4' ),
			 array( 'style', '!=', 'style_10' ),
			 array( 'style', '!=', 'style_12' ),
			 array( 'style', '!=', 'style_13' ),
			 array( 'style', '!=', 'style_14' ),
			), 
		),

		array(
			'id'    => 'cursor_text',
			'type'  => 'text',
			'dependency' => array( 
				array( 'style', '==', 'style_12' ),	
			),		
			'title' => __('Cursor Text','interactive-cursor'),
			'default' => __('Nurency Digital','interactive-cursor'),
		),

	)
) );

