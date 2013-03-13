<?php

add_filter( 'post_class span4', 'wps_first_post_class' );
function wps_first_post_class( $classes ) {
    global $wp_query;
    if( 0 == $wp_query->current_post )
        $classes[] = 'first';
        return $classes;
}