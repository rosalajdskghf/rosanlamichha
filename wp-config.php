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
define( 'DB_NAME', 'tajakhabar' );

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
define( 'AUTH_KEY',         'R|2IhH!n;(?HFK3:_L*]{VY]5t}q8O?ESV5euw;)B1o<8.GeCA@LO G:Da25|$5:' );
define( 'SECURE_AUTH_KEY',  'P*Jg*O*x@XOls]MU+In4$>:oqR8va.X3Az8Pvu*H56]8o|4~.iHeHbRN_:$0bA+b' );
define( 'LOGGED_IN_KEY',    '~1j(9Dv0ok!XO0DkR$_Wnzj.311n?6CDX!VSzqlZY5!YACbT=TMg6|B0QKj,:@C`' );
define( 'NONCE_KEY',        'n-v8$I4&XdVs# q+w<a}X7?0Phi?!=<3A]8~G>WOW&O-2p&lq~-*Oa e9^BX=a|0' );
define( 'AUTH_SALT',        'c?`D(_urG-{^,Meo)-h K}|WOCbMM ,)/5K/^~?0QcW~!!=J?q8eE^A` `$A_-qg' );
define( 'SECURE_AUTH_SALT', 'SS.P@c9>Y;/sb@AB;I%1=T._pB>z<YW}j}b<Qa(!R.7I0-1?Xd|*,~35Yz~QO6[4' );
define( 'LOGGED_IN_SALT',   '({Vl<Q)@5lBr}#(5$`c@IKDlm!y22H9b;2yzq5;HGq{tRU~4]SFW&t6D]*6>evZn' );
define( 'NONCE_SALT',       'g^Ai,/n6/WzP:tXuuR:@_VvXX?pMXTq;X6TSc,xEUB~~8Q1Wt1r1@:1-6AcT&aQ?' );

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
