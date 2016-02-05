<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
/*====================================
=            LOCAL CONFIG            =
====================================*/


// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
	define('WP_HOME','http://localhost/Bespokemoney/');
	define('WP_SITEURL','http://localhost/Bespokemoney/');
	$table_prefix  = 'AIz5oVKgL1_'; // <-- GENERATE A RANDOM PREFIX

} else {
	define('WP_HOME','http://bespokemoney.com.au');
	define('WP_SITEURL','http://bespokemoney.com.au');
	$table_prefix  = 'bpm_'; // <-- GENERATE A RANDOM PREFIX

}


// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'bespokem_db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'bespokem_admin');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'e8P`9u=G[V7?)nvW');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{g+SsI^`@G&9UnE|2+zJ$.im =GK0|R@y.r9#)GjlIU(K! 3?8;-9N)v_A%1t`9T');
define('SECURE_AUTH_KEY',  'hrhjIA^:xS$],0]vInqxg^Hf#v%V35DaOVo*Z1 WqkC:618(TuSaX+k5@J-o%Qs]');
define('LOGGED_IN_KEY',    'F9K<F=A>LS+W4Df?>C`nnByN=sKjf3eo->Bf]3wcI#>WcG-3l]O?EwK]+dw~Y#tO');
define('NONCE_KEY',        '/-#x[)4[y~Fvd]I{[i+gB8X7,i3|UJ_~7b8EI2.i.qC5EHy3Pzrj%|, vbyiO64w');
define('AUTH_SALT',        '` }( <V--Z{68KGevbsZ^RK%D$@OA2G1w3GZl,L/[|}bl$Nx_8}OB<C@^m^hRR,;');
define('SECURE_AUTH_SALT', '`}/oH:O~4A3J1JcM@R2|Nz+tJ@J3Eq}-IHaD~fYg*;p+`Cz1z! @-cs_+zekt=`X');
define('LOGGED_IN_SALT',   'i-0--Y|[`#xE$#E:De.<+r-bmTKC2!O&Cc-WZWMRv=,x/T<^2~dwyOTZQXc89cNp');
define('NONCE_SALT',       'SoQAS^I*/c!WM[N.i~{!U+fF_`>Z}%Y2;CG:mA+g<(|e}ke]~ao=)K<1;43>k2jZ');
define( ‘DISALLOW_FILE_EDIT’, true );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**#@+
* {@link http://passwordsgenerator.net/ WordPress.org secret-key service}
*/
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define( 'SCRIPT_DEBUG', true );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
