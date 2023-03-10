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
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';z_*8}vql0R8teMDQ<vZws_#nXn?Ud-}modrytelk+/=)95yBfMySKs?Si_18RRJ' );
define( 'SECURE_AUTH_KEY',  'zit)HLYqQ16H+|3wCGoZ%{e]giYRAprsfu25q3U%&}j9lx_qZ*Eb^gP]HGvt8XA|' );
define( 'LOGGED_IN_KEY',    'iCTR.I3gID2)e(AEv%sq9?X>9Tapr&hqokAKs_)R9f.x7M]tslZ+qbv?e9K.Ll&M' );
define( 'NONCE_KEY',        'T, Gk%nb!Fbiig/!vH_Gb0K|V}MsCT!{)YJ;J b_mc2trLE.i?k4.#J(Y&>32b68' );
define( 'AUTH_SALT',        'jx|Z|aw$|Z>T4L!`b`Js6*4O~f4pP86~Y4O ^>&h)i?DZw$#U2ULHkP8m6oHvS[=' );
define( 'SECURE_AUTH_SALT', 'SZeREWT>te}SHPPph}.adSe_`k+j3}Z#(.8nk}<i`gDi.9 B,wEl!bf]$:PjPT9l' );
define( 'LOGGED_IN_SALT',   'hX>xCw5j-P3tb9@cu>H`0Y@-)BR#2+HMX+q,!i@;.tbo{1zKG>%acz<j(0xrwO:i' );
define( 'NONCE_SALT',       'A$QRx)>G~0E6V1vMi/4rLI0@yhK$s-J{WUACo#=PD2P|+Z~cWxNJ_e@*k)5T|>o_' );

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
