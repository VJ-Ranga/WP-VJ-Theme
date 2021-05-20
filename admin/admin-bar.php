<?php

/**
 * admin bar css
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// on backend area
add_action('admin_head', 'bar_custom_styles');
// on frontend area
add_action( 'wp_head', 'bar_custom_styles' );

function bar_custom_styles() {
  echo '
  <style>
#wpadminbar {
    background: #2d3939 ;
    border-radius: 0px 0px 10px 10px ;
    padding: 0px 0px 5px 0px ;
    box-shadow: 5px 0px 30px rgb(0 0 0 / 25%), 5px 0px 10px rgb(0 0 0 / 22%);
;
}

#wpadminbar #wp-admin-bar-adminTitle .ab-item {
       border-radius: 10px;
}
#wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper {
    border-radius: 10px;
}
#wpadminbar .quicklinks>ul>li>a {
    border-radius: 10px;
}
#wpadminbar #wp-admin-bar-wp-logo>.ab-item {
    display: none;
}

</style>';
  
}
