<?php
class cahnrs_events_spine_child {
	
	public function __construct() {
		/**************************** 
		** DEFINE DIRECTORY, URI, AND OTHER THEME CONSTANTS - DB **
		***************************/
		$this->define_constants();
		/**************************** 
		** ADD CUSTOM IMAGE SIZES **
		*****************************/
		add_action( 'init', array( $this, 'add_image_sizes' ) );
		add_filter( 'image_size_names_choose', array( $this, 'add_custom_image_sizes' ) );
		add_post_type_support('page', 'excerpt');
		//add_action('wp_footer', array( $this , 'add_footer') );
		add_action( 'wp_enqueue_scripts', array( $this, 'cahnrs_scripts' ), 20 );
		add_action( 'init', array( $this, 'cahnrs_menu' ) );
	}

	
	private function define_constants() {
		define( 'CAHNRS2014DIR', get_stylesheet_directory() ); // CONSTANT FOR THEME DIRECTORY - DB
		define( 'CAHNRS2014URI', get_stylesheet_directory_uri() ); // CONSTANT FOR THEM URI - DB
	}

	public function add_image_sizes() {
		 add_image_size( '4x3-medium', 400, 300, true );
		 add_image_size( '3x4-medium', 300, 400, true );
		 add_image_size( '16x9-medium', 400, 225, true );
		 add_image_size( '16x9-large', 800, 450, true );
		 add_image_size( 'banner-wide', 1600, 350, true );
	}

	public function add_custom_image_sizes( $sizes ) {
		return array_merge( $sizes, array(
			'4x3-medium' => '4x3-medium',
			'3x4-medium' => '3x4-medium',
			'16x9-medium' => '16x9-medium',
			'16x9-large' => '16x9-large',
			'banner-wide' => 'banner-wide',
		) );
	}
	
	public function add_footer(){
		include 'footer-footerselector.php';
	}
	
	public function cahnrs_scripts() {
		wp_enqueue_script( 'theme-script', CAHNRS2014URI . '/js/script.js' , array(), '1.0.0', false );
		wp_enqueue_style( 'sdc-theme', CAHNRS2014URI . '/css/sdc.css' , false, '1.0.0' );
	}
	
	public function cahnrs_menu() {
		register_nav_menu( 'cahnrs_horizontal', 'Horizontal' );
		register_nav_menu( 'cahnrs_deeplinks', 'Site Deeplinks' );
	}
	
	public function sdc_content_filter( $content ){
		if( ( is_singular('post') || is_singular('page') ) && !is_front_page() ){
			ob_start();
			include CAHNRS2014DIR.'/sdc/single-content.php';
			return ob_get_clean();
		} 
		return $content;
	}
}

$wsu_cahnrs_events_spine = new cahnrs_events_spine_child();
?>