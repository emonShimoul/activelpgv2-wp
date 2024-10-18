<?php

if(class_exists('Attachments')){
    // die();
    require_once "lib/attachments.php";
}

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

    // for logo
    $defaults = array(
        'height'      => 100, // Change to desired height
        'width'       => 400, // Change to desired width
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support('custom-logo', $defaults);


    // for gutenberg
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' ); // The file name can be customized if needed
}
add_action("after_setup_theme", "activelpgv2_bootstrapping");


function activelpgv2_assets(){
    wp_enqueue_style("activelpgv2", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("tns-style", "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css");

    wp_enqueue_script("bootstrap-js", "//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
",null, "5.3.3", true);
    wp_enqueue_script("tns-js", "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js",null, "0.0.1", true);

    wp_enqueue_script("activelpgv2-main", get_template_directory_uri("/assets/js/main.js"),null,"0.0.1",true);
}
add_action("wp_enqueue_scripts", "activelpgv2_assets");