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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nsch' );

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
define( 'AUTH_KEY',         '-g%Qd4Jelr[1PP4U{M3#{QE!GgZu5@]clYM7 ViiGJpM{9ps<[nw#ac.}y%WK+y|' );
define( 'SECURE_AUTH_KEY',  '<Eu*Y1Y~*lm9K--is)UV,(M` Frah)4P2F}LTwqwr2~5##>/_8 jD|$]kIdH|6iZ' );
define( 'LOGGED_IN_KEY',    'BmBoTR?LGb3_=osjTcq+*7b/&ck~tAC!8J%qc,X+c@/V|Eu._&E]9AEn;x:5+AXB' );
define( 'NONCE_KEY',        '@YA1G<Rcqon(`k+-VaG1A^^GRckkWg*}=+xs@%[+@p :9t,[UNq,ciW};?j{o>aT' );
define( 'AUTH_SALT',        'BVC4bo6!zgKp^U$[CR2_]=xvgtp^uM:O@M0bg44Q{}9I&@9fV|NRy9:lD814(U^N' );
define( 'SECURE_AUTH_SALT', '|koG_CEr[#m7Jy{MuI?jKBP+V/o; kh|+#M39tNC4$hm!Dl|nyV~h{JTz#mQ,Vd@' );
define( 'LOGGED_IN_SALT',   '}/a!$+OIj)E8lxjZ$!1r(]4K >76{WTou+tvdOq.w:(p?DUd#^7h%AbfbrmxV$`@' );
define( 'NONCE_SALT',       'GcKwFvnj17H ={Wz}*[x|wY#qmu?TgP-Msb}sYa1w0.of0E`!)cv#}?%4 BGu3UZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
