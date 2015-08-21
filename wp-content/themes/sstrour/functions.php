<?php
// Registro del menú de WordPress

add_theme_support( 'menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main',
          'footer' => 'Footer'
        )
    );
}
function get_excerpt($count){  
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content(); 
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.' ...';
    return $excerpt;
}
add_filter('excerpt_length', 'longitud_excerpt');

add_theme_support('post-thumbnails');

// Add Interface custom image sizes
	add_image_size( 'featured', 320, 195, true );
	add_image_size( 'featured-medium', 650, 450, true );
	add_image_size( 'slider-narrow', 1038, 330, true ); 		// used on Featured Slider on Homepage Header for narrow layout
	add_image_size( 'slider-wide', 1440, 500, true ); 			// used on Featured Slider on Homepage Header for wide layout
	add_image_size( 'gallery', 474, 342, true ); 				// used to show gallery all images
	add_image_size( 'icon', 100, 100, true );					//used for icon on business layout
	add_image_size( 'thumbnails-circle', 150, 150, true );
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail( array(100,100) );  // Other resolutions

//  Left Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Left Sidebar',
          'description' => 'Barra Izquierda',
           'before_widget' => '',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

//  Right Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Right Sidebar',
          'description' => 'Barra Derecha',
           'before_widget' => '',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

register_sidebar(array(
        'name' => 'Slider_header',
        'description' => 'Slider header (Home)',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Footer_1',
        'description' => 'Footer 1',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Footer_2',
        'description' => 'Footer 2',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Footer_3',
        'description' => 'Footer 3',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Footer_4',
        'description' => 'Footer 4',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

/////////////////////////////////////////////////////////////////
// Info
function infobox( $atts, $content = null, $code = "" ) {

  // get attibutes and set defaults
        extract(shortcode_atts(array(
                'icon' => 'No especificado',
                'contenido' => 'No especificado'
       ), $atts));

    $return = '<div class="info-contact"><i class="material-icons">'.$icon.'</i> ';
    $return .= $content;
    $return .= '<hr></div>';
    return $return;
}

// El ShortCode
add_shortcode( 'info', 'infobox' );


function shortcode_gracias() {
  return '<p>¡Gracias por leer mi blog!, si te gustó suscríbete al feed RSS</p>';
}
add_shortcode('gracias', 'shortcode_gracias');
?>