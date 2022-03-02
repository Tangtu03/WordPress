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
define( 'AUTH_KEY',         '[z){Rl3UTW`y`4f<fU!ZZOJ-/K)xH&fb_bb:7@bt*a=b^OxH>/1n:dpE~@Hx@Vyy' );
define( 'SECURE_AUTH_KEY',  'Ge7=7;|Iel^HGLHYHoQE5h5mh{d&2r- /aX;x_qT-BNI+qwVcgMoA*m@r/>_ne8^' );
define( 'LOGGED_IN_KEY',    'm7ucWDNK(~fFbRY#:Rk|OtU-<|R03v%Bz #L!-I@zhdm^vu4r/[.OFs-M~Z,0f%7' );
define( 'NONCE_KEY',        'R&W?Q)SRfH+{$t/F`qs9)aXUntl&p3N=pjT)Hf&3Ol/ W3L8<Q7#4-w@IDw,84.N' );
define( 'AUTH_SALT',        '3U:DU4@ZC83<j?ic}YB~1QV4Q[jq#6PV6v%%,g$R#:5N-}@^,8!o7U*O4pyOlQu[' );
define( 'SECURE_AUTH_SALT', 'MwR_})uOa^^GsyB@e;?l8R}it8T,=.Y;b.,vNE`rF2}Fbh~#Z]piz/*wgj}^m)82' );
define( 'LOGGED_IN_SALT',   '1&3Cl`k)3>L9yQ0Dy;(CoaeT?Xm$&f!6W>w^bn};cVQ;yd<buYUx KTrUHI~mQ{g' );
define( 'NONCE_SALT',       'Na>NK.h|>sY^uI*Rrbo*R2M}91eIqO67Xy3/NGb]ks&8-sFy_yN]!+C_BgqtWI:X' );

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
