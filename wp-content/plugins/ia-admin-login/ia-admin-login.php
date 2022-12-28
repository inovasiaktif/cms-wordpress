<?php
/**
 * Plugin Name:             IA Admin Login
 * Plugin URI:              https://inovasiaktif.com
 * Description:             Custom Wordpress Admin Login page.
 * Version:                 1.0
 * Author:                  Rio Susanto
 * Author URI:              https://inovasiaktif.com
 */

// Add Custom CSS
function ia_adminlogin_add_custom_css() {
    $files = '<link rel="stylesheet" href="'.plugins_url().'/ia-admin-login/public/css/login.css" />';
    echo $files;
}
add_action('login_head', 'ia_adminlogin_add_custom_css');

// Custom Login Header
// function ia_adminlogin_custom_login_form() {
//     // die('test');
//     remove_action( 'wp_login', 'login_init' );
//     echo 'test';
// }
// // remove_action('login_form_login');
// add_action('wp_head', 'ia_adminlogin_custom_login_form');


// Hook the appropriate WordPress action
// add_action('init', 'prevent_wp_login');

// function prevent_wp_login() {
//     // WP tracks the current page - global the variable to access it
//     global $pagenow;
//     // Check if a $_GET['action'] is set, and if so, load it into $action variable
//     $action = (isset($_GET['action'])) ? $_GET['action'] : '';
//     // Check if we're on the login page, and ensure the action is not 'logout'
//     if( $pagenow == 'wp-login.php' && ($action && ! in_array($action, array('logout', 'lostpassword', 'rp', 'resetpass'))))) {
//         // Load the home page url
//         $page = get_bloginfo('url');
//         // Redirect to the home page
//         wp_redirect($page);
//         // Stop execution to prevent the page loading for any reason
//         exit();
//     }
// }
// add_action('init','custom_login');
// function custom_login() {
//     global $pagenow;
//     if ( 'wp-login.php' == $pagenow ) {
//         wp_redirect('/');
//         exit();
//     }
// }
?>