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
			wp_enqueue_script( 'angularjs', plugin_dir_url( __FILE__ ) . 'node_modules/angular/angular.js' , '', '', true );
			wp_enqueue_script( 'angular-animate', plugin_dir_url( __FILE__ ) . 'node_modules/angular-animate/angular-animate.js', ['angularjs'] , '', true );
			wp_enqueue_script( 'angular-aria', plugin_dir_url( __FILE__ ) . 'node_modules/angular-aria/angular-aria.js', ['angularjs'], '', true );
			wp_enqueue_script( 'angular-messages', plugin_dir_url( __FILE__ ) . 'node_modules/angular-messages/angular-messages.js', ['angularjs'], '', true );
			wp_enqueue_script( 'angular-material', plugin_dir_url( __FILE__ ) . 'node_modules/angular-material/angular-material.js', ['angularjs'], '', true );


			wp_enqueue_script( 'pagebuilder', plugin_dir_url( __FILE__ ) . 'js/pageBuilder.js' , ['angularjs','angular-animate', 'angular-aria','angular-messages','angular-material'], '', true );
			wp_enqueue_style( 'pagebuilder', plugin_dir_url( __FILE__ ) . 'css/style.css');
			wp_enqueue_style( 'angular-material', plugin_dir_url( __FILE__ ) . 'node_modules/angular-material/angular-material.css');
			wp_enqueue_style( 'angular-material-icons', plugin_dir_url( __FILE__ ) . '//fonts.googleapis.com/icon?family=Material+Icons');
		}



	}
}
