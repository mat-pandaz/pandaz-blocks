<?php

namespace PandaZ{
	Class PageBuilder{
		public function __construct(){
			add_action( 'add_meta_boxes', [$this, 'registerMetaBoxes'] );
			add_action('admin_enqueue_scripts', [$this, 'adminScripts']);
		}
		
		public function registerMetaBoxes() {
			add_meta_box( 'pandaz-page-builder', __( 'Page Builder', 'pandaz' ), [$this,'getPageBuilder'], 'page' );
		}
		
		public function getPageBuilder(){
			include('view/page-builder.php');
		}
		
		public function adminScripts(){
			wp_enqueue_script( 'angularjs', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js' , '', '', true );
			wp_enqueue_script( 'pagebuilder', plugin_dir_url( __FILE__ ) . 'js/pageBuilder.js' , ['angularjs'], '', true );
			wp_enqueue_style( 'pagebuilder', plugin_dir_url( __FILE__ ) . 'css/style.css');
		}
		
		

	}
}


