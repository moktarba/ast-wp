<?php /* Location des emplacements des menus */
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array(
			'principal'=>'Menu principal',
			 'secondaire'=> 'Menu secondaire'));
	}

	 /* Location des emplacements des widgets */
	 if (function_exists('register_sidebar')) {
	 	register_sidebar(array(
	 		'id' => 'premier',
	 		'name' => 'Premier emplacement',
	 		'description' => 'Premier emplacement des widget',
	 		'before_widget' => '',
	 		'after_widget' => '</br>',
	 		'before_title' => '<h3>',
	 		'after_title' => '</h3>'
	 		));

	 	register_sidebar(array(
	 		'id' => 'second',
	 		'name' => 'Second emplacement',
	 		'description' => 'Second emplacement des widget',
	 		'before_widget' => '',
	 		'after_widget' => '',
	 		'before_title' => '<h3>',
	 		'after_title' => '</h3>'
	 		));
	 

	 }

	  /* Ajout de la fonctionalité image à la une  */

	 if ( function_exists( 'add_theme_support' ) ) {
  		add_theme_support( 'post-thumbnails' );
}
 

 /* Modification du nombre de caractères à afficher pour les extraits*/
 
 	function nbLettres($length){
 		return 20;
 	}
 	add_filter('excerpt_length','nbLettres');

 	function customMore($more){

 		return '&nbsp;[&rarr; &hellip;]';
 	}

 	add_filter('excerpt_more','customMore');

 	/* ajout des formats d'articles*/
 	add_theme_support('post_formats', array('gallery','quote','image','audio','video'));

 	
  ?>

