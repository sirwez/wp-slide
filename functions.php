<?php
require_once('resize.php');

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

add_image_size( 'projects-thumbnail', 224, 162);

function carrega_scripts(){
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(),'1.0','all');
    wp_enqueue_style('boostrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(),'','all');
    wp_enqueue_style( 'bxslider', get_stylesheet_directory_uri()."/assets/require/bxslider-4-master/jquery.bxslider.css" );
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(),null,true);

    wp_enqueue_script('jquery-3','https://code.jquery.com/jquery-3.6.0.slim.min.js', array(),'',true);
    wp_enqueue_script('popper-js','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'),'',true);
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'),'',true);
    wp_enqueue_script('bxslider-js', get_stylesheet_directory_uri( )."/assets/requires/bxslider-4-master/src/js/jquery.bxslider.js", array('jquery'),'',true);
}
    add_action('wp_enqueue_scripts','carrega_scripts');

function wpdocs_excerpt_more( $more ) {
    return '. <a style= "text-decoration: none" href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function novo_tamanho_do_resumo($length) {
	return 10;
}

add_filter('excerpt_length', 'novo_tamanho_do_resumo');

// função para exibir imagem de destaque personalizada em tamanho
function app_post_thumbnail($width, $height, $class = '') {

	if( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	$url = get_the_post_thumbnail_url(); // Required

	$width = $width; // Optional. Defaults to '150'

	$height = $height; // Optional. Defaults to '150'

	$crop = true; // Optional. Defaults to 'true'

	$retina = false; // Optional. Defaults to 'false'

	$image = matthewruddy_image_resize( $url, $width, $height, $crop, $retina );

	echo "<img src='".$image['url']."' class='".$class."' />";
}