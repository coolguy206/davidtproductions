<?php register_nav_menus(array(
'Main' => 'Main Nav',
'About' => 'About Nav',
'Contact' => 'Contact Nav'

)); ?>
<?php add_theme_support( 'automatic-feed-links' ); ?>
<?php add_theme_support( 'post-thumbnails' );  ?>
<?php function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); ?>
<?php function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' ); ?>
<?php ini_set( 'mysql.trace_mode', 0 ); ?>
<?php add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
} ?>