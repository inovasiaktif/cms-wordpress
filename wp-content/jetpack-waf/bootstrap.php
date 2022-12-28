<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'normal' );
define( 'JETPACK_WAF_SHARE_DATA', true );
define( 'JETPACK_WAF_DIR', '/home/inovasiaktif.com/public_html/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/home/inovasiaktif.com/public_html/wp-content/../wp-config.php' );
require_once '/home/inovasiaktif.com/public_html/wp-content/plugins/jetpack/vendor/autoload.php';
include '/home/inovasiaktif.com/public_html/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-waf/run.php';
