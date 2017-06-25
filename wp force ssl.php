<?php

/*
Plugin Name: WordPress Force SSL
Description: Forces your entire wordpress to be open in https
Author: Ayush mehrotra
Author URI: https://www.beginblog.in
Version: 1
*/

function toz_force_https () {
  if ( !is_ssl() ) {
    wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
    exit();
  }
}
add_action ( 'template_redirect', 'toz_force_https', 1 );
