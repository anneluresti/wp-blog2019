<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1c568b39a8b80cbc190bc54fba83627181c8dbca79e8031b' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v|~o0e0=e}J!Zw/Vn<<x6KgP1#P;>g__>=1I3Gh~L|Y5JaeN*dYko@#49#9~<oEC' );
define( 'SECURE_AUTH_KEY',  'Zcn#@/G7a1Mk`j}Rii`^yfwieT9V+K6QRh?Fo`!V^XX)n-hiLYyH-8X;{k|Vb],%' );
define( 'LOGGED_IN_KEY',    'l0,P[:`CtYDi$JkDAhI5x62Jw2Ue|CO+A&XcVj}wF=@B3V],Tq7DykCT{`fp{8mi' );
define( 'NONCE_KEY',        '-0{eTdboAD}z BqqXnUuqN!$<f,ur/65VOJ*;5!MT:Mp3YfZDM=8.HIg:BH*glt%' );
define( 'AUTH_SALT',        ']iY0KqKVGMY^dv:-H@x${Uk2oe;MTv)IW^XZIw|G{zoK70T_yOr%*MGz;IG0~C25' );
define( 'SECURE_AUTH_SALT', 'ik99lNDP24[zoFRGK{(gVum]A^_E;#BC ?/)W=bIxNYe3*}gDN+(h[r1_MoY2^< ' );
define( 'LOGGED_IN_SALT',   'mEf9u,ZWvtsL5~|8 _]@/<DYSpT_t:-Mvi.r{ kj<Ol@*FA[M[[%XmEKnr=ruAS.' );
define( 'NONCE_SALT',       ';4,YK<DyntjwWn#Px(f!>)exc#w;F2apoz.=XaOdyg%vV:snJ<_ n8PBJ?uON)n{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
