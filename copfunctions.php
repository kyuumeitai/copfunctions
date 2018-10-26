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

add_filter( 'shortcode_atts_gallery', 'cops_gallery_atts', 10, 3 );

function cops_gallery_atts( $output, $pairs, $atts ) {
        $output['size'] = 'large';
        return $output;
};