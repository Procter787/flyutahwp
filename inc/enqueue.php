<?php /**
 * Enqueue scripts and styles.
 */
function epicpress_scripts() {
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

	$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
	$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );

	/*------Site Styles ----*/
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'main-style', 'rtl', 'replace' );
	
	
	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

	// Deregister the jquery-migrate version bundled with WordPress.
	wp_deregister_script( 'jquery-migrate' );

	// CDN hosted jQuery migrate for compatibility with jQuery 3.x
	wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );	
	
	
	/*------Site Scripts ----*/
	wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


}
add_action( 'wp_enqueue_scripts', 'epicpress_scripts' );

 ?>