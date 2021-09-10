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
define( 'DB_NAME', 'estate' );

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
define( 'AUTH_KEY',         'zcZf6xcGKb,!a/GI.78(f;!M1/ZsW6%Hb!RT!G[NR{Aw}}>xTa>E@y}l*nz!)oa3' );
define( 'SECURE_AUTH_KEY',  'ZrT(%s,_~v)qgM5UWg%c00-<6W.zT?mE7Nbj2Vyt[/~YddF)Br}}uq()A40WMqpe' );
define( 'LOGGED_IN_KEY',    '}$B3@rUL}-E?yN572E[u?eG,llbp,kc5Ium9d?`G42CsXAyk<h,#J`~vW,j1^E)G' );
define( 'NONCE_KEY',        '4fWHo{F)AHoB;$e8;URBk_AY3V[j`wd@H><-p|$m4R?|7?wS|1T!m#SvyEh6V-FE' );
define( 'AUTH_SALT',        ']q*|A%-;Xx{I`;q82r2DT}SV}+R-d<D?`!;isXw;ZSHdEVz@:J*bZa1adw^2Tt=H' );
define( 'SECURE_AUTH_SALT', '<3Z5k<P,Wrb8`.{<Ue!-E[~}rN);QhdTIeyz{vX5#C*6$WDqc#trf1Y6b^%vePlu' );
define( 'LOGGED_IN_SALT',   '=j`F|U$`Zz+`JclD}MpQ^/Zpb;y#f&!`S<qEt<21-]c_A(:rS|U)w?@YPYU&PT7]' );
define( 'NONCE_SALT',       'XB/*S7)M)`V4}r9^/3aoK!1VGLbmHC(}Fhe#*o~^{Y}&U(1z/O7iMFESPjp!DBr>' );

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
