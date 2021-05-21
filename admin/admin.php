<?php
/**
 * admin dashboard css
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action('admin_head', 'custom_styles');
function custom_styles() {
  echo '
  <style>
  #adminmenu div.wp-menu-name {
    padding: 10px 0;
}
  #adminmenu li.menu-top {
    border: 2px;
    background: #a7c2ff6b;
    border-radius: 5px;
    margin: 5px;
   box-shadow: 0px 10px 10px rgb(0 0 0 / 10%);
}
#dashboard-widgets-wrap {
    display: none;
}

body.wp-admin #adminmenu .wp-submenu a, body.wp-admin #adminmenu .wp-has-current-submenu .wp-submenu a, body.wp-admin #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a, body.wp-admin #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
    border-radius: 5px;
}

body.wp-admin #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, body.wp-admin #adminmenu .wp-menu-arrow, body.wp-admin #adminmenu .wp-menu-arrow div, body.wp-admin #adminmenu li.current a.menu-top, body.wp-admin #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background: #a7c2ff6b;
    border-radius: 5px;
}

#wpfooter #footer-left .mitoLink {
    display: none;
}
body.wp-admin #adminmenu  a:hover, body.wp-admin #adminmenu li.menu-top:hover, body.wp-admin #adminmenu li.opensub > a.menu-top, body.wp-admin #adminmenu li > a.menu-top:focus  {
    border-radius: 5px;
}

body.wp-admin #adminmenu .opensub .wp-submenu li.current a, body.wp-admin #adminmenu .wp-submenu li.current, body.wp-admin #adminmenu .wp-submenu li.current a, body.wp-admin #adminmenu .wp-submenu li.current a:focus, body.wp-admin #adminmenu .wp-submenu li.current a:hover, body.wp-admin #adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a {
    background: #a7c2ff29;
    border-radius: 5px;
    margin: 2px;
}
.comment-ays, .feature-filter, .imgedit-group, .popular-tags, .stuffbox, .widgets-holder-wrap, .wp-editor-container, p.popular-tags, table.widefat {
    border-radius: 10px;
}

body.wp-admin #adminmenu .wp-submenu, body.wp-admin #adminmenu .wp-has-current-submenu .wp-submenu, body.wp-admin #adminmenu .wp-has-current-submenu.opensub .wp-submenu, body.wp-admin #adminmenu a.wp-has-current-submenu:focus + .wp-submenu {
    //background: #323a4a;
    border-radius: 5px;
box-shadow: 0px 10px 10px rgb(0 0 0 / 10%);
}

#post-status-info {
    background-color: #2d3939;
    border-radius: 5px;
}
.ai1wm-holder {
    border-radius: 10px;
}

.ai1wm-right .ai1wm-segment {
    border-radius: 10px;
    box-shadow: 0px 10px 10px rgb(0 0 0 / 10%);
}
 #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
     width: 160px;
 }

//admin menu panel shadow

#adminmenuback {
   box-shadow: 5px 0px 30px rgb(0 0 0 / 25%), 5px 0px 10px rgb(0 0 0 / 22%);
}

  </style>';
}


