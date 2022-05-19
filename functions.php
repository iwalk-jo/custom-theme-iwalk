<?php   

function enqueue_customtheme_styles() {
      wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
      wp_enqueue_style( "customtheme-style", get_stylesheet_uri(  ));
}
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");



// loading the custom theme(iwalkcustomtheme) style or scripts //
// function enqueue_customtheme_styles() {
//       wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@3.3.6/dist/css/bootstrap.min.css");
//       wp_enqueue_style("customtheme-style", get_stylesheet_uri() );

//       // wp_register_style('customtheme-style', get_template_directory_uri() . '/style.css' ); 
//       //  wp_enqueue_style( 'customtheme-style', get_template_directory_uri() . '/style.css' ); 
      	
//       // wp_enqueue_style( 'style', get_stylesheet_uri() );
//             // wp_enqueue_style("customtheme-style", get_stylesheet_directory_uri() );
// }
// add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");

function customtheme_setup() {
      // Register a custom primary navigation menu
   register_nav_menus( array( 
         "primary" => __("Primary Menu", "customtheme"),
   )); 

// Add Theme support for document title tag
   add_theme_support("title-tag");

   
}
add_action("after_setup_theme", "customtheme_setup");
?>