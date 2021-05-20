<?php
/**
 * login 
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );
function custom_login_stylesheet() {
    echo '<style>
    body.login {
        background: #232323;
    }
    body.login form {
        margin-top: 20px;
        margin-left: 0;
        padding: 35px 30px;
        font-weight: 400;
        overflow: hidden;
        background: #2c3338;
        border: 1px solid #656565;
        box-shadow: 0px 10px 30px rgb(0 0 0 / 50%);
        border-radius: 10px;
        color: #ccd0d4;
    }
    .wp-core-ui .button-primary {
        background: #4e6b6b;
        border-color: #94abab;
    }
    .login form .input, .login input[type=password], .login input[type=text] {
        border-radius: 5px;
    }
    .login form .input, .login form input[type=checkbox], .login input[type=text] {
        background: #f3f3f3;
    }

    </style>';
}
