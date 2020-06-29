<?php 

	function eduslack_files(){
		wp_enqueue_style('eduslack_main_styles', get_stylesheet_uri());

	}
		add_action('wp_enqueue_scripts', 'eduslack_files')
	

?>