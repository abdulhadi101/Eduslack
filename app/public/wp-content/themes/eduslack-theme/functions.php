<?php 

	function eduslack_files(){
wp_enqueue_script('main-eduslack-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

		wp_enqueue_style('eduslack_main_styles', get_stylesheet_uri());
		wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


	}
		add_action('wp_enqueue_scripts', 'eduslack_files');
		
function eduslack_features(){

		add_theme_support( 'title-tag' );

}

		add_action('after_setup_theme', 'eduslack_features')
	

?>