<?php

/*
Plugin Name: WordPress Force SSL/https (force whole site to be open in https protocol)
Description: Forces your entire wordpress to be open in https
Author: Ayush mehrotra
Author URI: https://www.beginblog.in
Git hub URI: https://github.com/beginblog/wordpress-force-ssl/
Version: 1
*/

function toz_force_https () {
  if ( !is_ssl() ) {
    wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
    exit();
  }
}
add_action ( 'template_redirect', 'toz_force_https', 1 );
