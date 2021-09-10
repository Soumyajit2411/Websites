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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '%,Rf|OlWxEvmsv@-]jOJb&D:/5,O<vVzJ9R{c+/`qfP:bg96t1tJCB0(G& 96w[c' );
define( 'SECURE_AUTH_KEY',  '_+Fu2xlEAl~iU@ =J?VgF9p:FZPJ6kwde~g_vTB0PG{o0N>}bBV6nXM#b%gL7JH8' );
define( 'LOGGED_IN_KEY',    '90cLalbpkL]e|W.N7;FT7OSsb8P7RawyPg1?K_D-O2Yj)4@;tv1QcbSD}n&C#PJp' );
define( 'NONCE_KEY',        'S^HsuzG~]=qR,R|Kt.OcC%h p0*1esif2<HNSO*l(>.+S7S[t}t_8Jb$<3dJ5X71' );
define( 'AUTH_SALT',        'cyd}~pXN0Xgo&ZPUJc/7CSdp_e?5E>Q/[v2SV gXH1-S8% <p|>_cbgq4wwiY]-s' );
define( 'SECURE_AUTH_SALT', '~=Ps{{~awX@VD![WuI0X.qqj2Pb|WR#{ BhNmZ$LI+}/a#A>WxJ%WwL)~~xm2Rno' );
define( 'LOGGED_IN_SALT',   'Hx9E0PSN`sRr%g%1?ATl+52nhS0y3cL$:F=BXLZwU5F}x6mT7NJM?`8 S8%A<$U.' );
define( 'NONCE_SALT',       'jfYKi8Q8BbF?R}{#2$|kEylP_#(KJz+%$P7p8]!mW_TUR,b7 e?ODn_4<WKWX/xN' );

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
