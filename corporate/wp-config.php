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
define( 'DB_NAME', 'corporate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i }R95(>%()?E88=%3uJ;ff,>C;_Exo0R|Avh&`~kqX){u_i|^9zl<Jv1L<2s^bo' );
define( 'SECURE_AUTH_KEY',  '8peH=+ZC_@4[kaIb5.PXUr{Wp+->_T<3u(uW5]g*jx5!)I4e(#z1~5he5%_EmmjO' );
define( 'LOGGED_IN_KEY',    ';x7F_x3 Gp,N;Cqbe2U94hx,X$Or>}xvU^~L|f[Pl$Tj ;n%33N-e~n:ifj[#Q``' );
define( 'NONCE_KEY',        'V&2`M)/L>4k0{TZs^4#_7/s>Ks/<]})T!5$ ])BN^@b791<5)(Oa kdR;NkeX..z' );
define( 'AUTH_SALT',        'w[_wi0Uv@BHAl2ov TthbpH{;h<oeAb`!c*$$W:`PhG^e9h1_~MroGG+e PaJRy;' );
define( 'SECURE_AUTH_SALT', '0#SUixNkSrOQ(Wl-I8c896p#&/wNJi-9bm4PZ%94ndgA3#:=)qj;SB%)C}cixc.N' );
define( 'LOGGED_IN_SALT',   '|z9N/C7S;V~/,f/cJH?=Oah<jr}#3JOi*:GMcrPTM i=5qB^ij}aG3HF$!<SQ$TX' );
define( 'NONCE_SALT',       '/{uvAkg]!ajUF-f:K@iqu[F_*<X0aa?Jg#>R|yWGwNTNku6#TgR!f)6 d1?jWhPF' );

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
