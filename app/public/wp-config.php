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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O(ww.q`|*4G<jw>GqL8Lo$5Cv)jNkHY0.f{hTt|)-LUIUM<%LOTXlLCxf09r8@LT' );
define( 'SECURE_AUTH_KEY',   'Ysdy}jbuz7j0PvjGQ00b[B}?c|[~A_+<0Rn!J|g(g=XiKu 5s#0a{M8qN!aF=8z<' );
define( 'LOGGED_IN_KEY',     'Rq20`gc S!ju;I :[4>!9hgt6<z*TMkLQtsR=|gXLtHBJl?MUM1Ash6Fe?$j~;>z' );
define( 'NONCE_KEY',         '%?FfDb8sE;&_7Yh5J_#*i6xl9I2-LF9dSIU2*xsXG4Jn{; ~dFl]u[LN(6*XqQ6}' );
define( 'AUTH_SALT',         'w`Ulc=bv)Tdcy0noPpT2X(o[wR&4x+/yG2Zv:`i,c&oK[OI+{f1s$_|:~HG56Dg)' );
define( 'SECURE_AUTH_SALT',  '_f0k*T3XS>-&s1ym==Fb6& 4;3O{&?y8ID(D&3Q[4#7x4fpw3F2Py(?f0jVzz>Yo' );
define( 'LOGGED_IN_SALT',    'VR(62Z#0MZVP[[`p b-v&w=DHa#I9tr>Z5j;7W8P%ayXf3)Op`8H?57SiMp9,&rR' );
define( 'NONCE_SALT',        'Dx^nzPl<&VILvq`/y{#D[!a}HQ}Hda}=K =W&8,,XQkoy}vwU94~GR4W`,=}ZrBB' );
define( 'WP_CACHE_KEY_SALT', '??SOJNoD:7?f2%+R+6PoF+-|U(GeE%qtQ$>^Glu@DM0p1YjYrOQ-EKJoH<Mn#2?r' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
