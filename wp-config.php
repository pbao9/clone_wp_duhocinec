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
define( 'DB_NAME', 'duhoc_mevivu' );

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
define( 'AUTH_KEY',         'vY{.+)R[k#mVSpu8~`Iprf%4l_?L^V5fqBsL*D=>j]B6DioEFwp@+`UT T9cWqXI' );
define( 'SECURE_AUTH_KEY',  'O86sY0dIO,8t{RZoG[dcHlXj)>.PqjY@vgMk|{(D[)g&0i[bWc:B_P9fnAh^4D2`' );
define( 'LOGGED_IN_KEY',    'kT1Mn:xQ.vQ7AQ=s.xSfi;7Em3YW*EqS(!>39)g@N}Qtltf`Z2Gv`u@6mso)K_Uj' );
define( 'NONCE_KEY',        'E6aS3|AjDaoq/D4e20-F>QMx<gan*Y3]!_o4/}*gI*Zp.0CVb:ozwH?fEW2q@3c.' );
define( 'AUTH_SALT',        '_3 t ZmPZ9~`e+V0RL9`BDD>rYwa&8-olY;F@<v! 0.oqDLKDy:`;xs:O]>aJ2:f' );
define( 'SECURE_AUTH_SALT', '|gIBmpAIQc 4hD;b|k7A {iqzM/YZ`UWAbtj$6M,9Q7SQ|]#d?~Q--/2UU0J(!xI' );
define( 'LOGGED_IN_SALT',   'y/@8!ue0zGJy^t)S/E~)^Xa~=x^;jUU*~SCvmAS_CL?7@hR5O0tK6qoGL<eObPNO' );
define( 'NONCE_SALT',       'U Xb/4R7M)9H}lS<,ty/Y{DmhuW3G/%w<!JSP,fRKa$c~DvQN4lY!.6?80h*c[8#' );

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
