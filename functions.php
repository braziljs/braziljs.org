<?php
//Suporte a thumbnail com suporte a crop
	if(function_exists('add_theme_support')):
		add_theme_support('post-thumbnails');

	if ( function_exists( 'add_image_size' ) )
		add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'img-experiment', 176, 165, true );
	}
	
	endif;
	

//Limitar os caracteres do the_exerpt()
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

?>



