<?php


function activelpgv2_bootstrapping(){
    load_theme_textdomain("activelpgv2");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-header");
    register_nav_menu("mainmenu", __("Main Menu", "activelpgv2"));
    $alpha_custom_logo_defaults = array(
        "width" => '100',
        "height" => '100'
    );
    add_theme_support("custom-logo", $alpha_custom_logo_defaults);


    // for gutenberg
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' ); // The file name can be customized if needed
}
add_action("after_setup_theme", "activelpgv2_bootstrapping");


function activelpgv2_assets(){
    wp_enqueue_style("activelpgv2", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "activelpgv2_assets");