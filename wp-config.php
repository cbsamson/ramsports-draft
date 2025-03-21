<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ramsports' );

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
define( 'AUTH_KEY',         'u{JhKb]![]oC<@[<IV;{j|QR7,Yo~P0=$/)A,U4!Djyf9/(fL`,TJ}B1})T5a1D3' );
define( 'SECURE_AUTH_KEY',  '$oI [f}PD7Jxgu7b5+6K$[M}T}IqU`%B`?,AZj/&RGOp+M<tVN7`E<A|E!:Yci^)' );
define( 'LOGGED_IN_KEY',    'agsV%k*z^[><*cQ~Pq-PEY%aPTL;!r$p8&hV6CrBL;3Q6uV5>Q5]}[(+hJiz.9-c' );
define( 'NONCE_KEY',        '/[6)}iz;em&=$,5Iw$[IaS5qi.e8/Om?t41|C8`y38p0iunvu.hD/ :hj%{W<DAG' );
define( 'AUTH_SALT',        'aep^aw| <]pL8qUnG+`E;sZsXj6Vp,u@-7&_m+j#xRgwowIF!Fy%L:5le5~nIi29' );
define( 'SECURE_AUTH_SALT', ' 1h|d5KY*<1wmWLU*(4r{Hy;-tPsP HS^O9+P<5JegXI}9rhgPMJE`@i-a4UtUw{' );
define( 'LOGGED_IN_SALT',   ':+9`!~-S7c<4)dcB)ClT< B?Wp))R@ZE17EHP~>(/|fI5Sj[yXLDE91sH!C$_s|[' );
define( 'NONCE_SALT',       '%b%$(8W{F_#:#^~vP be:F=bT o]?S^bB|vNp/R0xdG#^vET#/@i%d0/?1-G%Fpv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
