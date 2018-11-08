<?php
    /*
    Plugin Name: Copesa functions
    Plugin URI: http://alex.acunaviera.com/
    Version: 0.1
    Author: Álex Acuña Viera
    Description: generic functions
    Text Domain: derpyderp
    License: GPLv3
    */

function cops_gallery_atts( $output, $pairs, $atts ) {
        $output['size'] = 'large';
        return $output;
};

add_filter( 'shortcode_atts_gallery', 'cops_gallery_atts', 10, 3 );

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');
