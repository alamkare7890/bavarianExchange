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
define( 'DB_NAME', 'bavarianexchange' );

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
define( 'AUTH_KEY',         'F6Jj)R4h)6|Vd`}BkHd&5jYB(1?OTykD)|M7zaA(u|)(W/(EfyG?f!J$KIZdnY.l' );
define( 'SECURE_AUTH_KEY',  'jfq=DxWwGJX2lP{V*pn2$F=avBuyekxo=}*8;oLOVX%}Gowue2St7?FV@nA$:i|~' );
define( 'LOGGED_IN_KEY',    '``nlpFtlwRU8IPckL+)4qMBAN9 A+@lM&G@H4UPc`5|&ETX7y f|^:vM8!MP<!u#' );
define( 'NONCE_KEY',        'PP19`a9YEqj(M,m{MhT<:<t_X1{adAp5HJFd0:r6vUM&Ep4E}yDxx2@do*`>x%HA' );
define( 'AUTH_SALT',        'EudjC 3]7.PIT7k[.s/>E}z@NS0aZD|Leslv<(&uwM,y<?) Y8|Fr0^.^Nunx4~w' );
define( 'SECURE_AUTH_SALT', ',0y}t0>T&@x;Y.~4}y_v6+#q0CT&l|t:^I.:HZO!~v0)^%/r/OjBZ~6-{*z[4}/:' );
define( 'LOGGED_IN_SALT',   'MJFvD*A6L{D=C?.d)4%s+ge*B^&f#>?1)Z^}c!Sc2+BMd,C=7*/4XM.gN`}k ~;W' );
define( 'NONCE_SALT',       'U!`-FWh2tTkLF`W3J B}-B,_M5m+kI`Y_UG[b qazD-iDX@7}{SK{$RJH%AzWiwe' );

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
