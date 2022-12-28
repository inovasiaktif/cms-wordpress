<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

/** Graphql JWT Auth Secret Key */
define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', 'IA_DIGITAL_PRINTING_}u!v12ZS6-i1f.vDTuUeCj&zgX7Gmn+?`!+w$SLsY+cA$Qd9j^])tAh!<=@l6U7~_RIO_SUSANTO' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'inovasiaktif_digitalprinting' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LUd<?~Pr&BYtvxStD/c}@?hgAC%|K~:},+g;1ggN*0iWAiz{) s`sOem0)D=?^+<' );
define( 'SECURE_AUTH_KEY',  '9G~$U].u{GNOSn$SnMdOZc1mpdY_k|cH{!2!fIJllij-SLi[a*8Jw>IL3uibzxY?' );
define( 'LOGGED_IN_KEY',    'Ej}(E ZW(x41si0~t:<_r3P<`V;zqK.-yCvi:{>!|zxmlH.+i/j.*00DnI4q/Jw@' );
define( 'NONCE_KEY',        '=HgAW+e_xtS#MVEJF5c~s<@U0Mb+?4%P#-F2=P5RG6e?;OB-*v[8AT!gi1Rs7qm<' );
define( 'AUTH_SALT',        ';1(xuF>;b0z9,Fmrp~c3.C&nPY{D (y.+9}s*.T_%%Uz,?SG1596.*/p_4KwK+PG' );
define( 'SECURE_AUTH_SALT', '/h&Up x+ytwR:5Eg_#C=g)Wd0=s&qugzh)zMf]Dl:PatzlBZc+PsdvHQ>46U{2^(' );
define( 'LOGGED_IN_SALT',   'W=tdH}T|Y3)L{[t=x)=8$:D&s*s[-r:U:[:,3|nl0Y(<`+D}{X=?,`&~>b{Mh3uD' );
define( 'NONCE_SALT',       'n=sap9)iHY!Qv%{al/?~Qhm_}}|H!==Tgrsq]1Uw%cYS+5Xd{9*S|%r8dfAde0rF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
