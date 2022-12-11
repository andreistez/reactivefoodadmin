<?php

/*
Plugin Name:  Reactive Food Endpoints
Version:      1.0.0
Text Domain:  reactivefood-endpoints
*/

use Food\ReactiveFood;

// If this file is accessed directory, then abort.
if( ! defined( 'ABSPATH' ) ) die;

// Include the autoloader, so we can dynamically include the rest of the classes.
require_once( trailingslashit( dirname( __FILE__ ) ) . 'inc/autoloader.php' );

ReactiveFood::getInstance();

