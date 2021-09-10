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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2y]$J5%X<uY<IW?uaZd9 ~^+[]#yO D;T>T}a[GMW4iBd{Dh2{1aDV.>:.91??-i' );
define( 'SECURE_AUTH_KEY',  'M76Ds&;-c{h3[kMnXn@dthk19V.H/NR9BiM^y<x_|Pd4S]4@^nH,gb#nXfCVJn4_' );
define( 'LOGGED_IN_KEY',    'ksELRH8Y ir^f6n#&VPwSE$dp*ZVr~!<&-7v3;<l,2{HH*N<ZboZsS?+n,+C81Bs' );
define( 'NONCE_KEY',        ' x9pW6uRG-_;fX5Q0A2,+cE+^+jXS&6.KB<uRID1p4gVU*/s<c-Hk(RFqcE/#RdO' );
define( 'AUTH_SALT',        '%TVqo0lC$v&ov6Q?Y|%^mWg|Cqpjs58hMh)vdMK5 xsv7)7m0%QlIgpU=%K}Uk}r' );
define( 'SECURE_AUTH_SALT', '2t8Y[vLS^Jif*-UzFX|8UzZmdU4r#u9OV6q9lB_n/F!Cx,`(=4e=byP^<Ee5/9~X' );
define( 'LOGGED_IN_SALT',   'uszH#iNWh{@$f)xTAiBnGb>?xA:TqL]VO=|h-l ozL*6;N03WX7s^ )0F!_B e.5' );
define( 'NONCE_SALT',       '<G6[ [a#_IQ%%9-T!<~G1<G-XA*Q@arpAiji-NW(;T$y,?S2M:{Nj{eBYiZD#:Vx' );

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
