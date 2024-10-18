<?php

// disable the Settings screen in wp admin bar
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); 

// disable the default instance in the post page of wp admin bar
add_filter( 'attachments_default_instance', '__return_false' ); 

// For creating a slider
function activelpgv2_attachments($attachments){
    $fields = array(
        array(
            'name'      => 'title',
            'type'      => 'text',
            'label'     => __('Title', 'activelpgv2'),
        ),
    );

    // register for a post
    $args = array(
        'label'        => 'Featured Slider',
        'post_type'    => array('page'),
        'filetype'     => array('image'),
        'note'         => 'Add Slider Images',
        'button_text'  => __('Attach Files', 'activelpgv2'),
        'fields'       => $fields,
    );

    $attachments->register('slider',$args);
}
add_action( 'attachments_register', 'activelpgv2_attachments' );

