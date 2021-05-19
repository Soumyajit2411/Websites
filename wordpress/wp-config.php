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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/websites/wordpress' );

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
define( 'AUTH_KEY',         'UpSL<]3fr9yf4TiwGcJE}tDC/nV-]Yv>cC2P@HK2rswpO`oE1f!u0l]W:0Yp{Bi0' );
define( 'SECURE_AUTH_KEY',  'qle+G+DH^uf#n.Mfg{B!= n=U*)62R_d{YL50#/>;!d^b=)pBq^:27x0QC?=<+Vn' );
define( 'LOGGED_IN_KEY',    'em[5TjJ/Z[L]R.p1+p]e4SLVHjo*&m$%9r/.y7^x#(/,ugGLDCz_g/X4zfhFBitU' );
define( 'NONCE_KEY',        '7 e3GS2k4kQ1bMz%K^]DEBz[a,~-cM6IfYy0cg<>z[@U+/_*k<>zeqCKDE-*xr05' );
define( 'AUTH_SALT',        'Okd/^ akhK9By`^m(mb+ZAyyz)]9A F<~@iw|XY43#}kq5XIG1GXQ~06scH&Dzj#' );
define( 'SECURE_AUTH_SALT', 'z[=Y?@7$`Y6W4Pm:<&;mxQnu,7aPye.m?qG5~}.&!w5rTewYlNX{sjSN?!<K4.Pg' );
define( 'LOGGED_IN_SALT',   '-p^1BTxd[98g.>W+Bw(pi]VVU>}o#4;w>MV]#?6@(v_MIdckMXD#yMa%?X=o@ pL' );
define( 'NONCE_SALT',       '6D^2+aK@4W,gOR4#p~z~.=GjsX^.PSrJTd?N#*l/mmFClTt6y5Uop,jS8Kf1P3tv' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
